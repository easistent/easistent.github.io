$(document).ready(function() {
    var $menuLogo = $('#menu-logo');
    var $pageMenu = $('#page-menu');
    var $menu = $pageMenu.find('.menu');
    var $subMenu = $pageMenu.find('.submenu');
    var $menuTrigger = $pageMenu.find('.menu-header li:first');
    var $menuTriggerArrow = $menuTrigger.find('.icon-arrow-down');
    var $content = $('#js-main-content');

    $menuLogo.on('click', function() {
        $pageMenu.toggleClass('closed');
        $content.toggleClass('container-shift');
    });

    $menuTrigger.on('click', function() {
        $subMenu.toggleClass('closed');
        $menu.toggleClass('closed');
        $menuTriggerArrow.toggleClass('icon-arrow-down icon-arrow-up');
    });
});
