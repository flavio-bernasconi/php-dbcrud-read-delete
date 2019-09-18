$(document).ready(init);


function getPagamenti(){

  // resetDiv()

  $.ajax({
      url : "api.php",
      method : "GET",
      success : function(data){
      // console.log(data);

      for (var i = 0; i < data.length; i++) {
        var d = data[i];
        // console.log(d);

        var source = $("#template").html();
        var template = Handlebars.compile(source);

        var context = {
          id : d.id,
          price : d.price,
          prenotazione_id : d.prenotazione_id
        }

        var html = template(context);

        if (d.status == "accepted") {
          $("#pagamenti-accepted").append(html);
        }
        if (d.status == "rejected") {
          $("#pagamenti-rejected").append(html);
        }
        if (d.status == "pending") {
          $("#pagamenti-pending").append(html);
        }

      }

    },//fine success
    error: function(err){
      console.log(err);
    }
  })


};




function deletePagamento(){
  var box = $(this).parent();
  var idPagamento = box.data('id');
  var nonni = $(this).parentsUntil(".container");

  console.log(box);

  // console.log(idPagamento);
  $(nonni).html("");

  $.ajax({
    url : 'api-delete.php',
    method : 'GET',
    data : { id : idPagamento},
    success : function(data){
      getPagamenti()
    },
    error : function(){

    }

  })


}



//AGGIUNGI LE FUNZIONI
function  init(){
  getPagamenti();
  $(document).on("click",".btn-delete",deletePagamento);


}
