
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("pro");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }




    $(document).on('ready', function () {
        $("input:checkbox").on('click', function() {
          // in the handler, 'this' refers to the box clicked on
          var $box = $(this);
          if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
          } else {
            $box.prop("checked", false);
          }
        });
         })



         $("input:checkbox").on('click', function() {
            // in the handler, 'this' refers to the box clicked on
            var $box = $(this);
            if ($box.is(":checked")) {
              var group = "input:checkbox[name='" + $box.attr("name") + "']";
              $(group).prop("checked", false);
              $box.prop("checked", true);
            } else {
              $box.prop("checked", false);
            }
          });

          function uncheck(){
            var checkbox1 = document.getElementById("op1");
            var checkbox2 = document.getElementById("op2"); 
            var checkbox3 = document.getElementById("op3");
            var checkbox4 = document.getElementById("op4"); 
            var checkbox5 = document.getElementById("op5");

           checkbox1.onclick = function(){ 
           if(checkbox1.checked != false){ 
           checkbox2.checked =null; }
            } 
           checkbox2.onclick = function(){ 
           if(checkbox2.checked != false){ 
           checkbox1.checked=null;
            }
            } 
           }

