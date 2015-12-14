$(document).ready(function () {

  $('[data-toggle="popover"]').popover({ 
      trigger: "hover" 
  });

  $(".select-sms").change(function(){
      $(this).find("option:selected").each(function(){
          if($(this).attr("value")=="reg"){
              $(".well-hide").not(".reg").hide();
              $(".reg").show();
          }
          else if($(this).attr("value")=="unreg"){
              $(".well-hide").not(".unreg").hide();
              $(".unreg").show();
          }
          else if($(this).attr("value")=="cek"){
              $(".well-hide").not(".cek").hide();
              $(".cek").show();
          }
          else if($(this).attr("value")=="ubah"){
              $(".well-hide").not(".ubah").hide();
              $(".ubah").show();
          }
          else{
              $(".well-hide").hide();
          }
      });
  }).change();

  // var $table = $('.table');
  // var $fixedColumn = $table.clone().insertBefore($table).addClass('fixed-column');

  // $fixedColumn.find('th:not(:first-child),td:not(:first-child)').remove();

  // $fixedColumn.find('tr').each(function (i, elem) {
  //     $(this).height($table.find('tr:eq(' + i + ')').height());
  // });

});