// detect popup blocker

blocker_enbabled: function () {
        screenParams = beef.browser.getScreenSize();
        var popUp = window.open('/', 'windowName0', 'width=1, height=1, left='+screenParams.width+',     top='+screenParams.height+', scrollbars, resizable');
        if (popUp == null || typeof(popUp)=='undefined') {
            return true;
        } else {
            popUp.close();
            return false;
        }
    }
