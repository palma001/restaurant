$(document).ready(function(){
        pagination(1);

        $(document).on('click','.pagination li a',function(e){
            e.preventDefault();
            var valorhref = $(this).attr("href");
            pagination(valorhref); 
        });
    });
function pagination(page){
    $.ajax({
        url: 'http://localhost/delivery/home/pagination/',
        type: 'POST',
        data:{nropage:page},
        dataType:'JSON',
        success:function(data){
            var product = "";
                $.each(data.products,function(key,item){
                    product +='<form action = "http://localhost/delivery/cart/store/" method="post">';
                        product += '<div class="col-xs-12 col-sm-6 col-md-4">'+
                            '<div class="product-item">'+
                                '<div class="product--img">'+
                                    '<img src="http://localhost/delivery/uploads/products/'+item.image+'" alt="Product" />'+
                                    '<div class="product--hover">'+
                                        '<div class="product--action">'+
                                            '<button type ="submit">Add To Cart</button>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="divider--shape-1down"></div>'+
                                '</div>'+
                                '<div class="product--content">'+
                                    '<div class="product--title">'+
                                        '<input type="hidden" name="img" value="'+item.image+'">'+
                                        '<input type="hidden" name="id" value="'+item.product_id+'">'+
                                        '<h3><a href="'+item.product_id+'">'+item.title+'</a></h3>'+
                                        '<input type="hidden" name="title" value="'+item.title+'">'+
                                    '</div>'+
                                    '<div class="product--price">'+
                                        '<span>$'+item.price+'</span>'+
                                        '<input type="hidden" name="price" value="'+item.price+'">'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                    product +=  '</form>';
                });
            $('.products').html(product);

            linksolucionado = Number(page);
            //total registros 
            totalRegistro = data.total;
            //cantidad de registros
            cantidad = data.quantity;
            numeroLink = Math.ceil(totalRegistro/cantidad);
            paginador = '<ul class="pagination mt-20">';

            if (numeroLink > 1) {
                paginador += '<li>'+
                '<a href="'+(linksolucionado-1)+'" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a>'+
                '</li>';
            }else{
                paginador += '<li>'+
                '<a href="#" aria-label="Next" class="active"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a>'+
                '</li>';
            }

            cant = 1;
            pagInicio = (linksolucionado > cant) ? (linksolucionado - cant) : 1;

            if (numeroLink > cant) {
                pagRestantes = numeroLink - linksolucionado;
                pagFin = (pagRestantes > cant) ? (linksolucionado + cant) : numeroLink
            }else{
                pagFin = numeroLink;
            }

            for (var i = pagInicio; i <= pagFin; i++) {
                if (i==linksolucionado) {
                    paginador += '<li class="active"><a href="javascript:void(0)">'+i+'</a></li>'; 
                }else{
                    paginador += '<li><a href="'+i+'">'+i+'</a></li>';
                }

            }

            if (linksolucionado < numeroLink) {
                paginador += '<li>'+
                '<a href="'+(linksolucionado+1)+'" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a>'+
                '</li>';
            }else{
                 paginador += '<li>'+
                '<a href="#" aria-label="Next" class="active"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a>'+
                '</li>';
            }
            paginador += '</ul>';
            $('.pagination').html(paginador);
        }
    })
}
