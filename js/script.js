
    $(document).ready(function() {
        
        var title = $(this).attr('title').toLowerCase();
        
        switch (title) {
            case 'dashboard':
               $('#menu_dashboard').addClass("active");
                break;
                
            case 'new post':
                $('#menu_new_post').addClass("active");
                break;
                
            case 'categories':
                $('#menu_categories').addClass("active");
                break;
                
            case 'manage admins':
                $('#menu_manage').addClass("active");
                break;
             
            case 'comments':
                $('#menu_comments').addClass("active");
                break;
                
            case 'live blog':
                $('#menu_live').addClass("active");
                break;
                
            case 'logout':
                $('#menu_logout').addClass("active");
                break;
                    
            default:
                
        }
        
    });
