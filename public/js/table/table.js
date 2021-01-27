function localhost_url(){
     var strFullPath=window.document.location.href;
     var strPath=window.document.location.pathname;
     var pos=strFullPath.indexOf(strPath);
     var prePath=strFullPath.substring(0,pos);
     var postPath=strPath.substring(0,strPath.substr(1).indexOf('/')+1);
     var basePath = prePath + postPath; 
     return basePath
  }
$(document).on("click", ".edit_linebot_account", function () {
     var linebot_id = $(this).data('linebot_id');
     var linebot_name = $(this).data('linebot_name');
     var linebot_role = $(this).data('linebot_role');
     var linebot_email = $(this).data('linebot_email');
     $(".modal-body #linebot_name").val( linebot_name );
     // $(".modal-body #linebot_role").text( linebot_role );
     $(".modal-body #linebot_email").val( linebot_email );
     $(".modal-body #linebot_id").val( linebot_id );
     $(".modal-body #role").val( linebot_role );
     ban()
});

$(document).on("click", ".confirm", function () {
     table = $("form").serializeObject();

     
     $.post(localhost_url()+"/public/updata_data", table,
          function(data){
               if(data == false){
                    alert('更新失敗')
               }else{
                    alert('修改成功 點擊確定返回業面')
                    window.location.reload()
               }
          });
});
//序列化轉json
//取值的內容需要有name才取得到
$.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
      if (o[this.name]) {
        if (!o[this.name].push) {
          o[this.name] = [ o[this.name] ];
        }
        o[this.name].push(this.value || '');
      } else {
        o[this.name] = this.value || '';
      }
    });
    return o;
  }



$(document).on("click", ".del_linebot_account", function () {
     var _token = $('#csrf').val()
     var linebot_id = $(this).data('linebot_id');
     if(confirm("確實要刪除嗎?")){
          $.post(localhost_url()+"/public/updata_del",{id:linebot_id,_token:_token},
                    function(data){
                         if(data == true){
                              alert('刪除成功 點擊確定返回業面')
                              window.location.reload()
                         }else{
                              alert('刪除失敗 點擊確定返回業面')
                              window.location.reload()
                         }
                    });
     }
          
});


 




$(document).on("click", "#role", function () {
  ban()
});

function ban(){
    if($('#role').val() == 'deactivate'){
    if(!$("#ban_reason").length > 0){
          $("#reason").append("<dov id='ban'><br>原因:<input name='ban_reason' id='ban_reason' type='text'/></div");
    }
  }else{
      $("#ban").remove()
    }
          
}