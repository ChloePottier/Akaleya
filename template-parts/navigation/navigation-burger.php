<div class='container'>
    <div class='row'>
        <div class='col'>
            <label class='burger text-center d-flex flex-column d-md-none text-white font-size-13 position-fixed rounded-circle bg-burger' id='burger'>MENU
                <span class='bg-white isclosed mx-auto' id='burger1'>&nbsp;</span>
                <span class='bg-white isclosed mx-auto' id='burger2'>&nbsp;</span>
                <span class='bg-white isclosed mx-auto' id='burger3'>&nbsp;</span>
            </label>
            <nav class='menu-burger display-none bg-prune-dark-op70 px-auto' id='navigation'>
                <ul class='  font-family-bebas font-size-31 text-right pt-9'>
                    <li><a href='index.php'>HOME</a></li>
                    <?php  
                    
                    if(is_user_logged_in()):
                        include 'wp-content/themes/akaleya-theme/template-parts/navigation/navigation-items-private.php';
                    else :                        
                        include 'wp-content/themes/akaleya-theme/template-parts/navigation/navigation-items.php';
                    endif;
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
