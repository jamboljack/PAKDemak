<?php 
$uri = $this->uri->segment(1);

if ($uri == 'home')
{
    $home = 'active';
    $pak = '';
}
elseif ($uri == 'pak') 
{
    $home = '';
    $pak = 'active';
} 
else
{
    $home = 'active';
    $pak = '';   
}

?>
<aside>
    <div id="sidebar" class="nav-collapse">        
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="<?php echo $home; ?>" href="<?php echo site_url('home'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>                            
                <li>
                    <a class="<?php echo $pak; ?>" href="<?php echo site_url('pak'); ?>">
                        <i class="fa fa-th"></i>
                        <span>Daftar PAK</span>
                    </a>
                </li>
            </ul>            
        </div>        
    </div>
</aside>