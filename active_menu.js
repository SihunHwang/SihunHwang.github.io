var current_location = location.href
        var menu = document.querySelectorAll('.menu')
        for (var i=0; i<menu.length; i++){
            if (menu[i].href === current_location){
                menu[i].className = 'active'
            }
        }