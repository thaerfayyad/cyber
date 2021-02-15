$(function(){

            $("#Protocols-tab").click(function(){
              $("#Protocols").show();
              $("#threats").hide();
              $("#Protocols-tab").addClass("active");
              $("#threats-tab").removeClass("active");
            });

            $("#threats-tab").click(function(){
              $("#Protocols").hide();
              $("#threats").show();
              $("#threats-tab").addClass("active");
              $("#Protocols-tab").removeClass("active");
            });
            
           $(".Exam_tab").click(function () { 
             $(this).addClass("active_tab");
             $(".resource_tab").removeClass("active_tab");
             $(".resource_tab").removeClass("active_tab");
           });
           
           $(".books_tab").click(function () { 
            $(this).addClass("active_tab");
            $(".Exam_tab").removeClass("active_tab");
            $(".resource_tab").removeClass("active_tab");
          });

      $(".resources_link").click(function () { 
        $(".link_attachment").show();       
      });

      $(".books_link , .exams_link , .other_links").click(function () { 
        $(".link_attachment").hide();       
      });


      $(".box_indenty").click(function () { 
        $(this).addClass("active_select");
        $(".box_indenty_general").removeClass("active_select");
      });

      $(".box_indenty_general").click(function () { 
        $(this).addClass("active_select");
        $(".box_indenty").removeClass("active_select");
      });

            
          });



