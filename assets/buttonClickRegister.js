let allLcButtons = document.querySelectorAll('.lc_button_click_register') || undefined
if(allLcButtons){
    jQuery(document).ready(function($){
        let ajaxRequest = () => {
            jQuery.ajax({
                url: ajaxUrlFromBackEnd[0],
                type: "POST",
                cache: false,
                data:{ 
                    action: 'register_click', 
                    clickMoment: "hoje"
                },
                success:function(res){console.log(res)}
            })
        }
        allLcButtons.forEach(button => {
            button.addEventListener('click', ajaxRequest)
            console.log(button)
        })
    })
}