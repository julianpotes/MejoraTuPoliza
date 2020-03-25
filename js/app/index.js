$(function() {

  $('[data-toggle="tooltip"]').tooltip();
  $('.mdb-select').material_select();

  let page = 1;

  product = (id, d) => {
    window.location = `${base}/product.php?id=${id}&detalle=${d}`;
  }

  friendly_url = (str, max) => {
    if(max === undefined) max = 32;
    const a_chars = new Array(
      new Array("a",/[à]/g),
      new Array("e",/[è]/g),
      new Array("i",/[í]/g),
      new Array("o",/[ó]/g),
      new Array("u",/[ú]/g),
      new Array("n",/[Ññ]/g)
    );
    for(let i = 0; i < a_chars.length; i++)
      str = str.replace(a_chars[i][1],a_chars[i][0]);
    return str.replace(/\s+/g,'-').toLowerCase().replace(/[^a-z0-9\-]/g, '').replace(/\-{2,}/g,'-').replace(/(^\s*)|(\s*$)/g, '').substr(0,max);
  }

  changePage = p => {
    page = p;
    get();
  }

  get = () => {
    
    $.ajax('./api/v1/products/fetch.php?category='  + category + '&page=' + page, {
      method: "GET",
      dataType: "json"
    }).done(function(data) {
   
      const { products } = data;

      if(products.length < 1) {

        category = '';
        get();

      } else {

        const { pages } = data;
          
        let productsHtml = '';
        let paginationHtml = '';
          
        products.forEach(product => {
          productsHtml += `
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="card card-ecommerce" onclick="product(${product.product_id}, '${friendly_url(product.title)}')">
                <div class="view overlay">
                  <img src="${base}/files/img/products/${product.product_id}/1.jpg?v=${product.updated}" class="img-fluid" alt="${product.title}">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-title dc-primary mb-1">
                    <button type="button" class="btn btn-info btn-rounded float-right m-0 p-2">+<b>info</b></button>
                    ${product.shop.business_name}
                  </h6>
                  <h5 class="card-title dark-grey-text mb-1"><strong>${product.title}</strong></h5>
                  <h6 class="card-title grey-text mb-2">${product.shop.business_address}</h6>
                  <div class="card-footer p-0">
                    <div class="row mt-2 mb-0">`;
    if(product.stock > 1) {
          productsHtml += `
                      <div class="col-9 text-left h4-responsive mt-1">
                        <span class="dc-secondary font-weight-bold mr-1">$${product.final_price}</span>
                        <span class="grey-text"><small><s>$${product.price}</s></small></span>
                      </div>
                      <div class="col-3 text-right h4-responsive mt-1">
                        <span class="badge bg-dc-tertiary">-${product.discount}%</span>
                      </div>`;
    } else { 
          productsHtml += `
                      <div class="col-12 text-left mt-1">
                        <span class="badge bg-dc-secondary">Agotado</span>
                      </div>`;
    }
          productsHtml += `
                    </div>
                  </div>
                </div>
              </div>
            </div>`;
          });

          $('#products').html(productsHtml);

          paginationHtml += `
            <div class="row justify-content-center mt-3">
              <nav class="mb-4">
                <ul class="pagination pagination-circle pg-blue mb-0">
                  <li class="page-item clearfix d-none d-md-block ${page === 1 ? 'disabled' : ''}"><a onclick="changePage(1);" href="#" class="page-link waves-effect">Inicio</a></li>
                  <li class="page-item ${page === 1 ? 'disabled' : ''}">
                    <a onclick="changePage(${page - 1})" href="#" class="page-link waves-effect" aria-label="Previous">
                      <span aria-hidden="true">«</span>
                      <span class="sr-only">Anterior</span>
                    </a>
                  </li>`;
    for(let i = 1; i <= pages; i++) {
          paginationHtml += `<li class="page-item ${page == i ? 'active' : ''}"><button onclick="changePage(${i});" class="page-link waves-effect">${i}</button></li>`;
    } 
          paginationHtml += `
                  <li class="page-item ${page == pages ? 'disabled' : ''}">
                    <a onclick="changePage(${page + 1})" href="#" class="page-link waves-effect" aria-label="Next">
                      <span aria-hidden="true">»</span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                  </li>
                  <li class="page-item clearfix d-none d-md-block ${page == pages ? 'disabled' : ''}"><a onclick="changePage(${pages});" href="#" class="page-link waves-effect">Fin</a></li>
                </ul>
              </nav>
            </div>`;

          $('#pagination').html(paginationHtml);

      }
    });
  }

  get();
    
});