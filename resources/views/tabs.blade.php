<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style>
    ul.tabs {
        margin: 0;
        padding: 0;
        float: left;
        list-style: none;
        height: 32px;
        border-bottom: 1px solid #333;
        width: 100%;
    }

    ul.tabs li {
        float: left;
        margin: 0;
        cursor: pointer;
        padding: 0px 21px;
        height: 31px;
        line-height: 31px;
        border-top: 1px solid #333;
        border-left: 1px solid #333;
        border-bottom: 1px solid #333;
        background-color: #666;
        color: #ccc;
        overflow: hidden;
        position: relative;
    }

    .tab_last {
        border-right: 1px solid #333;
    }

    ul.tabs li:hover {
        background-color: #ccc;
        color: #333;
    }

    ul.tabs li.active {
        background-color: #fff;
        color: #333;
        border-bottom: 1px solid #fff;
        display: block;
    }

    .tab_container {
        border: 1px solid #333;
        border-top: none;
        clear: both;
        float: left;
        width: 100%;
        background: #fff;
        overflow: auto;
    }

    .tab_content {
        padding: 20px;
        display: none;
    }

    .tab_drawer_heading {
        display: none;
    }

    @media screen and (max-width: 480px) {
        .tabs {
            display: none;
        }

        .tab_drawer_heading {
            background-color: #ccc;
            color: #fff;
            border-top: 1px solid #333;
            margin: 0;
            padding: 5px 20px;
            display: block;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .d_active {
            background-color: #666;
            color: #fff;
        }
    }
</style>

<ul class="tabs">
    <li class="active" rel="tab1">Tab 1</li>
    <li rel="tab2">Tab 2</li>
    <li rel="tab3">Tab 3</li>
    <li rel="tab4">Tab 4</li>
</ul>
<div class="tab_container">
    <h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
    <div id="tab1" class="tab_content">
        <h2>Tab 1 content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac metus augue.</p>
    </div>
    <!-- #tab1 -->
    <h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
    <div id="tab2" class="tab_content">
        <h2>Tab 2 content</h2>
        <p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
    </div>
    <!-- #tab2 -->
    <h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
    <div id="tab3" class="tab_content">
        <h2>Tab 3 content</h2>
        <p>Nulla eleifend felis vitae velit tristique imperdiet. Etiam nec imperdiet elit. Pellentesque sem lorem, scelerisque sed facilisis sed, vestibulum sit amet eros.</p>
    </div>
    <!-- #tab3 -->
    <h3 class="tab_drawer_heading" rel="tab4">Tab 4</h3>
    <div id="tab4" class="tab_content">
        <h2>Tab 4 content</h2>
        <p>Integer ultrices lacus sit amet lorem viverra consequat. Vivamus lacinia interdum sapien non faucibus. Maecenas bibendum, lectus at ultrices viverra, elit magna egestas magna, a adipiscing mauris justo nec eros.</p>
    </div>
    <!-- #tab4 -->
</div>
<!-- .tab_container -->
</div>


<script>
    // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

    /* if in tab mode */
    $("ul.tabs li").click(function() {

        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {

        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#" + d_activeTab).fadeIn();

        $(".tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
    });


    /* Extra class "tab_last" 
       to add border to right side
       of last tab */
    $('ul.tabs li').last().addClass("tab_last");
</script>