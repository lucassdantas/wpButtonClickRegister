let allLcButtons = document.querySelectorAll('.lc_button_click_register') || undefined
if(allLcButtons){
    jQuery(document).ready(function($){
        let ajaxRequest = () => {
            let currentDate = new Date(Date.now()).toLocaleDateString('pt-BR', {
                day: 'numeric', 
                month:'2-digit', 
                year:'numeric', 
                hour:'numeric',
                minute:'numeric',
                second:'numeric'
            })
            jQuery.ajax({
                url: ajaxUrlFromBackEnd[0],
                type: "POST",
                cache: false,
                data:{ 
                    action: 'register_click', 
                    clickMoment: currentDate
                },
                success:function(res){console.log(res + ' ')}
            })
        }

        allLcButtons.forEach(button => {
            button.addEventListener('click', ajaxRequest)
        })
    })
}