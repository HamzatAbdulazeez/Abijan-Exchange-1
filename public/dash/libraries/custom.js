const formatter = new Intl.NumberFormat('en-NG', {
    style: 'currency',
    currency: 'NGN',
    minimumFractionDigits: 2
});
const formatter_usd = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    currencySign: 'accounting',
    minimumFractionDigits: 2
});

$(function() {
    "use strict";

    // metisMenu
    $("#sidebar_menu").metisMenu();
    // metisMenu
    $("#admin_profile_active").metisMenu();

    $(".open_miniSide").click(function() {
        $(".sidebar").toggleClass("mini_sidebar");
        $(".main_content ").toggleClass("full_main_content");
        $(".footer_part ").toggleClass("full_footer");
    });
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $('#back-top').fadeOut(500);
        } else {
            $('#back-top').fadeIn(500);
        }
    });

    // back to top
    $('#back-top a').on("click", function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });


    // PAGE ACTIVE
    $("#sidebar_menu").find("a").removeClass("active");
    $("#sidebar_menu").find("li").removeClass("mm-active");
    $("#sidebar_menu").find("li ul").removeClass("mm-show");

    var current = window.location.pathname
    $("#sidebar_menu >li a").filter(function() {

        var link = $(this).attr("href");
        // if(link){
        //     if (current.indexOf(link) != -1) {
        //         $(this).parents().parents().children('ul.mm-collapse').addClass('mm-show').closest('li').addClass('mm-active');
        //         $(this).addClass('active');
        //         return false;
        //     }
        // }
    });

    // #NOTIFICATION_
    // for MENU notification
    $('.bell_notification_clicker').on('click', function() {
        $('.Menu_NOtification_Wrap').toggleClass('active');
    });

    $(document).click(function(event) {
        if (!$(event.target).closest(".bell_notification_clicker ,.Menu_NOtification_Wrap").length) {
            $("body").find(".Menu_NOtification_Wrap").removeClass("active");
        }
    });
    // CHAT_MENU_OPEN
    $('.CHATBOX_open').on('click', function() {
        $('.CHAT_MESSAGE_POPUPBOX').toggleClass('active');
    });
    $('.MSEESAGE_CHATBOX_CLOSE').on('click', function() {
        $('.CHAT_MESSAGE_POPUPBOX').removeClass('active');
    });
    $(document).click(function(event) {
        if (!$(event.target).closest(".CHAT_MESSAGE_POPUPBOX, .CHATBOX_open").length) {
            $("body").find(".CHAT_MESSAGE_POPUPBOX").removeClass("active");
        }
    });

    // CHAT_MENU_OPEN
    $('.serach_button').on('click', function() {
        $('.serach_field-area ').addClass('active');
    });

    $(document).click(function(event) {
        if (!$(event.target).closest(".serach_button, .serach_field-area").length) {
            $("body").find(".serach_field-area").removeClass("active");
        }
    });
    //progressbar js
    $(document).ready(function() {
        var proBar = $('#bar1');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#FFBF43',
                duration: 2000
            });
        }
        var proBar = $('#bar2');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#508FF4',
                duration: 2100
            });
        }
        var proBar = $('#bar3');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#4BE69D',
                duration: 2200
            });
        }
        var proBar = $('#bar4');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#3B5DE7',
                duration: 2200
            });
        }
        var proBar = $('#bar5');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#3BE769',
                duration: 2200
            });
        }
        var proBar = $('#bar6');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#3BE7E7',
                duration: 2200
            });
        }
        var proBar = $('#bar7');
        if (proBar.length) {
            proBar.barfiller({
                barColor: '#FFB822',
                duration: 2200
            });
        }

    });


    //notification section js
    $(".close_icon").click(function() {
        $(this).parents(".hide_content").slideToggle("0");
    });




    //count up js
    var count = $('.counter');
    if (count.length) {
        count.counterUp({
            delay: 100,
            time: 5000
        });
    }




    // data table


    //niceselect select jquery
    // $('.nice_Select').niceSelect();
    // //niceselect select jquery
    // $('.nice_Select2').niceSelect();
    // $('.default_sel').niceSelect();

    // niceSelect
    var niceSelect = $('.nice_Select');
    if (niceSelect.length) {
        niceSelect.niceSelect();
    };

    var niceSelect = $('.nice_Select2');
    if (niceSelect.length) {
        niceSelect.niceSelect();
    };

    var niceSelect = $('.default_sel');
    if (niceSelect.length) {
        niceSelect.niceSelect();
    };


    // datepicker
    $(document).ready(function() {
        var date_picker = $('#start_datepicker');
        if (date_picker.length) {
            date_picker.datepicker();
        }

        var date_picker = $('#end_datepicker');
        if (date_picker.length) {
            date_picker.datepicker();
        }
    });



    //progressbar js
    var delay = 500;
    $(".progress-bar").each(function(i) {
        $(this).delay(delay * i).animate({
            width: $(this).attr('aria-valuenow') + '%'
        }, delay);

        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: delay,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now) + '%');
            }
        });
    });

    //active sidebar
    $('.sidebar_icon').on('click', function() {
        $('.sidebar').toggleClass('active_sidebar');
    });
    $('.sidebar_close_icon i').on('click', function() {
        $('.sidebar').removeClass('active_sidebar');
    });

    //active menu
    $('.troggle_icon').on('click', function() {
        $('.setting_navbar_bar').toggleClass('active_menu');
    });

    //active courses option
    // $('.courses_option').on('click', function(){
    //     $(this).parent(".custom_select").toggleClass('active');
    // });

    $('.custom_select').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $('.custom_select.active').removeClass('active');
            $(this).addClass('active');
        }
    });
    //     $( 'ul.nav li' ).on( 'click', function() {
    //         $( this ).parent().find( 'li.active' ).removeClass( 'active' );
    //         $( this ).addClass( 'active' );
    //   });

    $(document).click(function(event) {
        if (!$(event.target).closest(".custom_select").length) {
            $("body").find(".custom_select").removeClass("active");
        }
    });
    //remove sidebar
    $(document).click(function(event) {
        if (!$(event.target).closest(".sidebar_icon, .sidebar").length) {
            $("body").find(".sidebar").removeClass("active_sidebar");
        }
    });

    // check all
    $("#checkAll").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

    // sumer note
    var summerNote = $('#summernote');
    if (summerNote.length) {
        summerNote.summernote({
            placeholder: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            tabsize: 2,
            height: 305
        });
    }
    // sumer note
    var summerNote = $('.lms_summernote');
    if (summerNote.length) {
        summerNote.summernote({
            placeholder: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            tabsize: 2,
            height: 305
        });
    }
    // sumer note
    var summerNote = $('.lms_summernote');
    if (summerNote.length) {
        summerNote.summernote({
            placeholder: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            tabsize: 2,
            height: 305
        });
    }


    //custom file
    $('.input-file').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

        $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
        });
    });

    //custom file
    $('.input-file2').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile1'),
            labelVal = $label.html();

        $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName1').html(fileName) : $label.removeClass('has-file').html(labelVal);
        });
    });

    // meta_keywords
    var bootstrapTag = $("#meta_keywords");
    if (bootstrapTag.length) {
        bootstrapTag.tagsinput();
    }


    if ($('.lms_table_active').length) {
        $('.lms_table_active').DataTable({
            bLengthChange: false,
            "bDestroy": true,
            language: {
                search: "<i class='ti-search'></i>",
                searchPlaceholder: 'Quick Search',
                paginate: {
                    next: "<i class='ti-arrow-right'></i>",
                    previous: "<i class='ti-arrow-left'></i>"
                }
            },
            columnDefs: [{
                visible: false
            }],
            responsive: true,
            searching: false,
        });
    }
    if ($('.lms_table_active2').length) {
        $('.lms_table_active2').DataTable({
            bLengthChange: false,
            "bDestroy": false,
            language: {
                search: "<i class='ti-search'></i>",
                searchPlaceholder: 'Quick Search',
                paginate: {
                    next: "<i class='ti-arrow-right'></i>",
                    previous: "<i class='ti-arrow-left'></i>"
                }
            },
            columnDefs: [{
                visible: false
            }],
            responsive: true,
            searching: false,
            info: false,
            paging: false
        });
    }

    if ($('.lms_table_active3').length) {
        $('.lms_table_active3').DataTable({
            bLengthChange: false,
            "bDestroy": false,
            language: {
                search: "<i class='ti-search'></i><style='display:none'>",
                searchPlaceholder: 'Quick Search',
                info: "Showing _START_ to _END_ of _TOTAL_ records",
                infoFiltered: "(filtered from _MAX_ total records)",
                paginate: {
                    next: "<i class='ti-arrow-right'></i>",
                    previous: "<i class='ti-arrow-left'></i>"
                }
            },
            columnDefs: [{
                visible: false
            }],
            "ordering": false,
            responsive: true,
            searching: true,
            info: true,
            paging: true
            // dom: '<"toolbar">frtip'

        });
    }
    if($('.readMsgTable').length) {
        $('.readMsgTable').DataTable({
            bLengthChange: false,
            "bDestroy": false,
            language: {
                search: "<i class='ti-search'></i><style='display:none'>",
                searchPlaceholder: 'Quick Search',
                info: "Showing _START_ to _END_ of _TOTAL_ messages",
                infoEmpty: "Showing 0 to 0 of 0 messages",
                infoFiltered: "(filtered from _MAX_ total messages)",
                emptyTable: "Your messages will appear here.",
                paginate: {
                    next: "<i class='ti-arrow-right'></i>",
                    previous: "<i class='ti-arrow-left'></i>"
                }
            },
            columnDefs: [{
                visible: false
            }],
            "ordering": false,
            responsive: true,
            searching: true,
            info: true,
            paging: true
            // dom: '<"toolbar">frtip'

        });
    }

    $('#checkboxmsgAll').click(function() {
        var isChecked = $('input[id="checkboxAll"]:checked').length > 0;
        if (isChecked) {
            $('.checkboxmsg').prop('checked', false);
        } else {
            $('.checkboxmsg').prop('checked', true);
        }
    });

    //var countmsg = $('#countmsg').val();
    //Check if all is selected
    $('.checkboxmsg').click(function() {
        var isChecked = $('input[id="checkboxAll"]:checked').length > 0;
        var countmsg = $('#countmsg').val();
        var noChecked = $('input[class="checkboxmsg"]:checked').length;
        if (noChecked == countmsg) {
            //alert('all checked');
            if (!isChecked) {
                $('#checkboxAll').prop('checked', true);
            }
        } else {
            //alert(noChecked+' checked boxes');
            $('#checkboxAll').prop('checked', false);
        }
    });

    $('.hidebalspan').click(function() {
        var txn_ngn1 = parseFloat(txn_ngn).toFixed(2);
        var txn_ngn_show = formatter.format(txn_ngn1);

        var txn_usd1 = parseFloat(txn_usd).toFixed(2);
        var txn_usd_show = formatter_usd.format(txn_usd1);

        //var txn_btc = parseFloat(txn_btc).toFixed(8);

        var txn_total1 = parseFloat(txn_total).toFixed(2);
        var txn_total_show = formatter.format(txn_total1);

        if ($(this).hasClass('showbal')) {
            //Show the balance
            $.ajax({
                type: "POST",
                url: "readnotice",
                data: {
                    bal: 'yes'
                },
                success: function(result) {
                    if (result) {
                        $('.hidebal').show();
                        $('.showbal').hide();
                        $('.totalbal').html(txn_total_show);
                        $('.btcbal').html(txn_btc + " BTC");
                        $('.btcbal_upto').html(txn_btc_upto + " BTC");
                        $('.ngnbal_upto').html("₦ " + txn_ngn_upto);
                        $('.ngnbal').html(txn_ngn_show);
                        $('.usdbal').html(txn_usd_show);
                        var url = window.location.href.split('#')[0];
                        history.replaceState('', document.title, url);
                    }

                }
            });
        } else {
            //Hide the balance
            $.ajax({
                type: "POST",
                url: "readnotice",
                data: {
                    bal: 'no'
                },
                success: function(result) {
                    if (result) {
                        $('.showbal').show();
                        $('.hidebal').hide();
                        $('.balspan').html('***');
                        var url = window.location.href.split('#')[0];
                        history.replaceState('', document.title, url);
                    }

                }
            });
        }
    });

    // document.getElementById("readMsgOpen").addEventListener("click", readMsg);
    //Read message



    // document.addEventListener("DOMContentLoaded", removeHash);
    // document.addEventListener("Load", removeHash);

    function removeHash() {
        // If there is no hash, don't do anything.
        if (!location.hash) return;

        // http://<domain></pathname>?<search><#hash>

        // Build an URL for the page, sans the domain and hash
        var url = location.pathname;
        if (location.search) {
            // Include the query string, if any
            url += '?' + location.search;
        }

        // Replace the loaded url with the built url, without reloading the page.
        history.replaceState('', document.title, url);
    }

    $(document).ready(function() {
        //removeHash();
        var url = window.location.href.split('#')[0];
        //history.replaceState('', document.title, url);  //Uncomment to remove hash
    });

    var tablez = $('.lms_table_active3').DataTable();
    var tablezInbox = $('.readMsgTable').DataTable();

    // #myInput is a <input type="text"> element
    $('.tablesearch').on('keyup', function() {
        tablez.search(this.value).draw();
        tablezInbox.search(this.value).draw();
        settingstable.search(this.value).draw();
    });

    //   layout select
    $('.layout_style').click(function() {
        if ($(this).hasClass('layout_style_selected')) {
            $(this).removeClass('layout_style_selected');
        } else {
            $('.layout_style.layout_style_selected').removeClass('layout_style_selected');
            $(this).addClass('layout_style_selected');
        }
    });



    // switcher menu
    // anly for side switcher menu
    $('.switcher_wrap li.Horizontal').click(function() {
        $('.sidebar').addClass('hide_vertical_menu');
        $('.main_content ').addClass('main_content_padding_hide');
        $('.horizontal_menu').addClass('horizontal_menu_active');
        $('.main_content_iner').addClass('main_content_iner_padding');
        $('.footer_part').addClass('pl-0');
    });

    $('.switcher_wrap li.vertical').click(function() {
        $('.sidebar').removeClass('hide_vertical_menu');
        $('.main_content ').removeClass('main_content_padding_hide');
        $('.horizontal_menu').removeClass('horizontal_menu_active');
        $('.main_content_iner').removeClass('main_content_iner_padding');
        $('.footer_part').removeClass('pl-0');
    });

    // switcher_wrap
    // anly for side switcher menu

    $('.switcher_wrap li').click(function() {
        $('li').removeClass("active");
        $(this).addClass("active");
    });

    $('.custom_lms_choose li').click(function() {
        $('li').removeClass("selected_lang");
        $(this).addClass("selected_lang");
    });


    $('.spin_icon_clicker').on('click', function(e) {
        $('.switcher_slide_wrapper').toggleClass("swith_show"); //you can list several class names
        e.preventDefault();
    });


    /*---------------------------------------------*/
    /*--- 10. webticker ---*/
    /*---------------------------------------------*/
    if ($('#webticker-dark-icons').length) {
        $("#webticker-dark-icons").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5
        });
    }
    if ($('#webticker-dark1').length) {
        $("#webticker-dark1").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5
        });
    }
    if ($('#webticker-dark2').length) {
        $("#webticker-dark2").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
            direction: 'right'
        });
    }
    if ($('#webticker-dark3').length) {
        $("#webticker-dark3").webTicker({
            height: 'auto',
            startEmpty: false,
            rssfrequency: 5
        });
    }
    if ($('#webticker-white1').length) {
        $("#webticker-white1").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
            direction: 'right'
        });
    }
    if ($('#webticker-white-icons').length) {
        $("#webticker-white-icons").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
        });
    }
    if ($('#webticker-white2').length) {
        $("#webticker-white2").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
        });
    }
    if ($('#webticker-white3').length) {
        $("#webticker-white3").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
            direction: 'right'
        });
    }


    //   color skin
    $(document).ready(function() {
        $(function() {
            "use strict";
            $(".pCard_add").click(function() {
                $(".pCard_card").toggleClass("pCard_on");
                $(".pCard_add i").toggleClass("fa-minus");
            });
        });
    });

    $(".readMsgFn").click(function() {
        var rep = $(this).attr("data-value");
        readMsg(rep);
    });

    $(".readMsgFnAdmin").click(function() {
        var rep = $(this).attr("data-value");
        readMsg2(rep);
    });

    $(".readNoticeMe").click(function() {
        var rep = $(this).attr("data-value");
        readNotice(rep);
    });

    $("#readNoticeA").click(function() {
        readNoticeAll();
    });

    function readMsg2(prett) {

        if (prett != "") {
            //Open the loading modal
            $('.loadingModalCenter').modal('show');
            setTimeout(function() {
                $('.loadingModalCenter').modal('hide');
            }, 1000);
            //Get msg from the database and place it into the modal
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/mail/readMail",
                data: {
                    msg: prett
                },
                dataType: 'json',
                success: function(result) {
                    console.log(result.success.id)
                    var msgid = result.success.id;
                    var msgbody = result.success.message;
                    var msgtime = result.success.created_at_date;
                    var msgdate = result.success.created_at_time;
                    var msgcategory = result.success.category;
                    var msgsubject = result.success.subject;
                    var msgcount = result.success.status;
                    var msgtype = result.success.type;
                    var msgoriginal = result.success;

                    if (msgid != "") {
                        $('#datereadMsg').html(msgdate);
                        $('#timereadMsg').html(msgtime);
                        $('#categoryreadMsg').html(msgcategory);
                        if (msgsubject) {
                            $('.subjectBox').show();
                            $('#subjectreadMsg').html(msgsubject);
                        } else {
                            $('.subjectBox').hide();
                        }
                        $('#memoreadMsg').html(msgbody);
                        $('#idreadMsg').val(prett);
                        $('#typereadMsg').val(msgtype);
                        if (msgtype != "inbox") {
                            $('#replybtnMsg').hide();
                        }
                        if (msgoriginal == "inbox") {
                            $('.messageSupport').html('Message from Support');
                        } else {
                            $('.messageSupport').html('Message sent to Support');
                        }
                        $('.' + msgid).removeClass('unreadmsgText');
                        if (msgcount == 0) {
                            if ($('.round_badge').hasClass('count' + msgtype)) {
                                $('.count' + msgtype).removeClass('round_badge');
                                $('.count' + msgtype).html('');
                            }
                        } else {
                            $('.count' + msgtype).html(msgcount);
                        }

                        //Open the modal
                        $('#readMsgModalCenter').modal('show');
                    } else {
                        window.location.href = window.location.href.split('#')[0];
                    }
                }
            });
        }
    }

    function readMsg(prett) {

        if (prett != "") {
            //Open the loading modal
            $('.loadingModalCenter').modal('show');
            setTimeout(function() {
                $('.loadingModalCenter').modal('hide');
            }, 1000);
            //Get msg from the database and place it into the modal
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/mail/readMail",
                data: {
                    msg: prett
                },
                dataType: 'json',
                success: function(result) {
                    console.log(result.success.id)
                    var msgid = result.success.id;
                    var msgbody = result.success.message;
                    var msgtime = result.success.created_at_date;
                    var msgdate = result.success.created_at_time;
                    var msgcategory = result.success.category;
                    var msgsubject = result.success.subject;
                    var msgcount = result.success.status;
                    var msgtype = result.success.type;
                    var msgoriginal = result.success;

                    if (msgid != "") {
                        $('#datereadMsg').html(msgdate);
                        $('#timereadMsg').html(msgtime);
                        $('#categoryreadMsg').html(msgcategory);
                        if (msgsubject) {
                            $('.subjectBox').show();
                            $('#subjectreadMsg').html(msgsubject);
                        } else {
                            $('.subjectBox').hide();
                        }
                        $('#memoreadMsg').html(msgbody);
                        $('#idreadMsg').val(prett);
                        $('#typereadMsg').val(msgtype);
                        if (msgtype != "inbox") {
                            $('#replybtnMsg').hide();
                        }
                        if (msgoriginal == "inbox") {
                            $('.messageSupport').html('Message from Support');
                        } else {
                            $('.messageSupport').html('Message sent to Support');
                        }
                        $('.' + msgid).removeClass('unreadmsgText');
                        if (msgcount == 0) {
                            if ($('.round_badge').hasClass('count' + msgtype)) {
                                $('.count' + msgtype).removeClass('round_badge');
                                $('.count' + msgtype).html('');
                            }
                        } else {
                            $('.count' + msgtype).html(msgcount);
                        }

                        //Open the modal
                        $('#readMsgModalCenter').modal('show');
                    } else {
                        window.location.href = window.location.href.split('#')[0];
                    }
                }
            });
        }
    }

    function readNotice(prett) {

        if (prett != "") {
            //update notification view_status on the database and redirect to the link
            $.ajax({
                type: "POST",
                url: "readnotice",
                data: {
                    inv: prett
                },
                success: function(result) {
                    var reaload = result.trim();
                    if (reaload != "") {
                        window.open(
                            reaload,
                            '_self'
                        );
                    } else {
                        window.location.href = window.location.href.split('#')[0];
                    }
                }
            });
        }
    }

    function readNoticeAll() {
        //Open the loading modal
        $('.loadingModalCenter').modal('toggle');

        //update notification view_status on the database and redirect to the link
        $.ajax({
            type: "POST",
            url: "readnotice",
            data: {
                all: 'yes'
            },
            success: function(result) {
                if (result) {
                    location.reload();
                }

            }
        });
    }

    $('#deletebtnMsg').click(function() {
        var msgid = $('#idreadMsg').val();

        //Open the loading modal
        $('.loadingModalCenter').modal('toggle');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/dashboard/mail/deleteOne",
            data: {
                delete: msgid
            },
            success: function(result) {
                if (result) {
                    location.reload();
                }

            }
        });
    });
    $('.deletTop').click(function() {
        if ($(this).hasClass('inbox')) {
            var countmsg = $('#countmsg').val();
            var isChecked = $('input[id="checkboxAll"]:checked').length;
            var noChecked = $('input[class="checkboxmsg"]:checked').length;

            if (noChecked == 0) {
                swal({
                    title: "Oops :(",
                    text: 'Please select the message you want to delete.',
                    type: 'error',
                    icon: "error",
                });
            } else {
                var someObj = {};
                someObj.fruitsGranted = [];
                someObj.fruitsDenied = [];

                $('input[class="checkboxmsg"]:checked').each(function() {
                    var $this = $(this);

                    if ($this.is(":checked")) {
                        someObj.fruitsGranted.push($this.attr("id"));
                    } else {
                        someObj.fruitsDenied.push($this.attr("id"));
                    }
                });
                var msgAll = someObj.fruitsGranted;
                //Open the loading modal
                $('.loadingModalCenter').modal('toggle');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/dashboard/mail/delete",
                    data: {
                        mail: msgAll,
                        countmsg: noChecked
                    },
                    success: function(result) {
                        if (result) {
                            if (noChecked == countmsg) {
                                $('#checkboxAll').prop('checked', false);
                            }
                            $('input[class="checkboxmsg"]:checked').prop('checked', false);
                            location.reload();
                        }

                    }
                });
            }
        }
    });

    $('.restoreTop').click(function() {
        var countmsg = $('#countmsg').val();
        var isChecked = $('input[id="checkboxAll"]:checked').length;
        var noChecked = $('input[class="checkboxmsg"]:checked').length;

        //Inbox and sent mails page - sent to the archive folder
        if ($(this).hasClass('inbox')) {
            var swalMsg = "archive";
        }
        //Archive or trash page - sent to the original folder
        if ($(this).hasClass('archive')) {
            var swalMsg = "restore";
        }
        if (noChecked == 0) {
            swal({
                title: "Oops :(",
                text: 'Please select the message you want to ' + swalMsg,
                type: 'error',
                icon: "error",
            });
        } else {
            var someObj = {};
            someObj.fruitsGranted = [];
            someObj.fruitsDenied = [];

            $('input[class="checkboxmsg"]:checked').each(function() {
                var $this = $(this);

                if ($this.is(":checked")) {
                    someObj.fruitsGranted.push($this.attr("id"));
                } else {
                    someObj.fruitsDenied.push($this.attr("id"));
                }
            });
            var msgAll = someObj.fruitsGranted;
            //Open the loading modal
            $('.loadingModalCenter').modal('toggle');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/mail/restoreMail",
                data: {
                    archiveselected: msgAll,
                    countmsg: noChecked,
                    archivetype: swalMsg
                },
                success: function(result) {
                    if (result) {
                        if (noChecked == countmsg) {
                            $('#checkboxAll').prop('checked', false);
                        }
                        $('input[class="checkboxmsg"]:checked').prop('checked', false);
                        location.reload();
                    }

                }
            });
        }
    });

    $('.achieveMail').click(function() {
        var countmsg = $('#countmsg').val();
        var isChecked = $('input[id="checkboxAll"]:checked').length;
        var noChecked = $('input[class="checkboxmsg"]:checked').length;

        //Inbox and sent mails page - sent to the archive folder
        if ($(this).hasClass('inbox')) {
            var swalMsg = "archive";
        }
        //Archive or trash page - sent to the original folder
        if ($(this).hasClass('archive')) {
            var swalMsg = "restore";
        }
        if (noChecked == 0) {
            swal({
                title: "Oops :(",
                text: 'Please select the message you want to ' + swalMsg,
                type: 'error',
                icon: "error",
            });
        } else {
            var someObj = {};
            someObj.fruitsGranted = [];
            someObj.fruitsDenied = [];

            $('input[class="checkboxmsg"]:checked').each(function() {
                var $this = $(this);

                if ($this.is(":checked")) {
                    someObj.fruitsGranted.push($this.attr("id"));
                } else {
                    someObj.fruitsDenied.push($this.attr("id"));
                }
            });
            var msgAll = someObj.fruitsGranted;
            //Open the loading modal
            $('.loadingModalCenter').modal('toggle');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/mail/achiveMail",
                data: {
                    archiveselected: msgAll,
                    countmsg: noChecked,
                    archivetype: swalMsg
                },
                success: function(result) {
                    if (result) {
                        if (noChecked == countmsg) {
                            $('#checkboxAll').prop('checked', false);
                        }
                        $('input[class="checkboxmsg"]:checked').prop('checked', false);
                        location.reload();
                    }

                }
            });
        }
    });

    $('#replybtnMsg').click(function() {
        var idreadMsg = $('#idreadMsg').val();

        $.ajax({
            type: "POST",
            url: "readnotice",
            data: {
                reply: idreadMsg
            },
            dataType: 'json',
            success: function(result) {
                var msgid = result.msgid.trim();
                var msgbody = result.msgbody.trim();
                var msgcategory = result.msgcategory.trim();

                if (msgid != "") {
                    var txtArea = document.getElementById("memo");
                    txtArea.value += '\r\n' + msgbody;
                    let element = document.getElementById('category');
                    element.value = msgcategory;
                    $('#idread').val(msgid);
                    $('#msgtyperead').val('reply');
                    $('#readMsgModalCenter').modal('hide');
                    $('#messageModalCenter').modal('show');
                    $('#memo').focus();
                }
            }
        });
    });

    $('#category').on('change', function(element) {
        var ops = $(this).val();

        if (ops == "Forgot Password") {
            $(".forgotpasswordshow").show();
            $(".forgotpasswordhide").hide();
        } else {
            $(".forgotpasswordshow").hide();
            $(".forgotpasswordhide").show();
        }
    });

    $('#ContinueCompose').click(function() {
        //var idread = $('#idread').val();
        console.log('hello');
        var category = $('#category').val();
        var subject = $('#subject').val();
        var memo = $('#memo').val();
        //var composetype = $('#msgtyperead').val();

        if (memo != "") {

            $('.spincompose').show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{route('send.mail')}}",
                data: {
                    category: category,
                    subject: subject,
                    message: memo,
                },
                success: function(result) {
                    $('.spincompose').hide();
                    if (result != "") {
                        $('#messageModalCenter').modal('hide');
                        $('#msgtyperead').val('compose');
                        $('#idread').val('');
                        $('#category').val('');
                        $('#memo').val('');
                        swal({
                            title: "Message sent",
                            text: 'Your Message has been sent successfully to Support.',
                            type: 'success',
                            icon: "success",
                        });
                    }
                }
            });
        }
    });

    function checkDec(el) {
        var ex = /^[0-9]+\.?[0-9]*$/;
        if (ex.test(el.value) == false) {
            el.value = el.value.substring(0, el.value.length - 1);
        }
    }

    $("#amountSell").on("keyup", function() {
        calUSD(this);
    });

    $("#amountBuy").on("keyup", function() {
        calUSDBuy(this);
    });

    function calUSDBuy(crom) {

        var currency = $('#currency_buy').val();
        var unit = $("#currencyBuy").val();
        var si = $(crom).val();
        var si = si.replace(/,/g, '');
        $(crom).val(si);
        checkDec(crom);
        var s = $(crom).val();

        var shortcode = $("#currency_buy").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var sellprice = getrate(shortcode, 'buy');
        var typecurr = getrate(shortcode, 'type');
        var nobtc = $('#csrfbtc').length;

        switch (unit) {
            case 'NGN':
                var usd_value = parseFloat(s / sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    console.log(btcworth)
                    var btc_value = parseFloat(usd_value / btcworth).toFixed(8);

                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                    }
                    if (btc_value == "1.00000000") {
                        var btc_value = "1";
                    }
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#myBuyform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                    $("#ecurrbuy2").html(btc_value + ' BTC');
                    $('#ecurrbuy2').css('color', '#1761fd');
                } else {
                    $("#ecurrbuy2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                $("#ecurrbuy").html("~" + formatter_usd.format(usd_value));
                $('#ecurrbuy').css('color', 'black');
                break;
            case 'BTC':
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    console.log(btcworth)
                    var btc_value = parseFloat(s).toFixed(8);
                    var usd_value = parseFloat(btc_value * btcworth).toFixed(2);
                    var ngn_value = parseFloat(usd_value * sellprice).toFixed(2);
                    if (s == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                        var ngn_value = 0;
                    }
                    if (btc_value == "1.00000000") {
                        var btc_value = "1";
                    }
                    $("#ecurrbuy").html("~" + formatter_usd.format(usd_value));
                    $("#ecurrbuy2").html(formatter.format(ngn_value));
                    $('#ecurrbuy').css('color', 'black');
                    $('#ecurrbuy2').css('color', '#1761fd');

                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#myBuyform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrbuy").html("");
                    $("#ecurrbuy2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            case 'USD':
                var ngn_value = parseFloat(s * sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(s / btcworth).toFixed(8);
                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var ngn_value = 0;
                    }
                    if (btc_value == "1.00000000") {
                        var btc_value = "1";
                    }
                    $("#ecurrbuy").html("~" + btc_value + " BTC");
                    $("#ecurrbuy2").html(formatter.format(ngn_value));
                    $('#ecurrbuy').css('color', 'black');
                    $('#ecurrbuy2').css('color', '#1761fd');
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#myBuyform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrbuy").html("");
                    $("#ecurrbuy2").html('Pay: ' + formatter.format(ngn_value));
                    $('#ecurrbuy2').css('color', '#1761fd');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            default:
                break;
        }
        if (currency == "Bitcoin") {
            $(".acctInfodivbuy").hide();
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
        } else {

            if (typecurr == "ecurrency") {
                $(".acctInfodivbuy").show();
                $("#header_acct_buy").html('Your ' + currency + ' Account Number');
                $("#header_acctname_buy").html('Your ' + currency + ' Account Name');
            } else {
                $(".acctInfodivbuy").show();
                $("#header_acct_buy").html('Your ' + currency + ' Wallet Address');
                $("#header_acctname_buy").html('Confirm ' + currency + ' Wallet Address');
            }
        }

    }

    function calUSD(crom) {
        checkDec(crom);
        var currency = $('#currency_sell').val();
        var unit = $("#currencySell").val();
        var s = $(crom).val();
        var shortcode = $("#currency_sell").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var sellprice = getrate(shortcode, 'sell');
        var typecurr = getrate(shortcode, 'type');
        var nobtc = $('#csrfbtc').length;

        switch (unit) {
            case 'NGN':
                var usd_value = parseFloat(s / sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(usd_value / btcworth).toFixed(8);

                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                    }
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#mySellform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                    $("#ecurrsell2").html(btc_value + ' BTC');
                    $('#ecurrsell2').css('color', '#1761fd');
                } else {
                    $("#ecurrsell2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                $("#ecurrsell").html("~" + formatter_usd.format(usd_value));
                $('#ecurrsell').css('color', 'black');
                break;
            case 'BTC':
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(s).toFixed(8);
                    var usd_value = parseFloat(btc_value * btcworth).toFixed(2);
                    var ngn_value = parseFloat(usd_value * sellprice).toFixed(2);
                    if (s == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                        var ngn_value = 0;
                    }
                    $("#ecurrsell").html("~" + formatter_usd.format(usd_value));
                    $("#ecurrsell2").html(formatter.format(ngn_value));
                    $('#ecurrsell').css('color', 'black');
                    $('#ecurrsell2').css('color', '#1761fd');

                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#mySellform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrsell").html("");
                    $("#ecurrsell2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            case 'USD':
                var ngn_value = parseFloat(s * sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(s / btcworth).toFixed(8);
                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var ngn_value = 0;
                    }
                    $("#ecurrsell").html("~" + btc_value + " BTC");
                    $("#ecurrsell2").html(formatter.format(ngn_value));
                    $('#ecurrsell').css('color', 'black');
                    $('#ecurrsell2').css('color', '#1761fd');
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#mySellform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrsell").html("");
                    $("#ecurrsell2").html('Receive: ' + formatter.format(ngn_value));
                    $('#ecurrsell2').css('color', '#1761fd');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            default:
                break;
        }
        if (currency == "Bitcoin") {
            $(".acctInfodiv").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
            $("#header_acct").html('');
            $("#header_acctname").html('');
        } else {

            if (typecurr == "ecurrency") {
                $(".acctInfodiv").show();
                $("#header_acct").html(currency + ' Account Number');
                $("#header_acctname").html(currency + ' Account Name');
                if (currency == "Perfect Money") {
                    var sell_from_pm = $("#sell_from_pm").val();
                    var pm_autoEnabled = $("#pm_autoEnabled").val();
                    var pm_manualEnabled = $("#pm_manualEnabled").val();
                    if (sell_from_pm == "Automatic" && pm_autoEnabled == "Enabled") {
                        $(".acctInfodiv").hide();
                        $("#acctnoSell").val('');
                        $("#acctnameSell").val('');
                    } else {
                        $(".acctInfodiv").show();
                    }
                }
            } else {
                $(".acctInfodiv").hide();
                $("#acctnoSell").val('');
                $("#acctnameSell").val('');
                $("#header_acct").html('');
                $("#header_acctname").html('');
            }
        }

    }

    function showcurrency(ps) {

        var shortcode = $("#currency_sell").find(':selected').data('value');
        if (shortcode) {
            var shortcodes = shortcode.toLowerCase();
            var typecurr = getrate(shortcodes, 'type');
        }
        if (ps == "Bitcoin") {
            $("#sellfrom_btc").show();
            $("#sellfrom_account").hide();
            $("#sellfrom_crypto").hide();
            $('#currencySell')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="BTC">BTC</option><option value="NGN">NGN</option>')
                .val('USD');
            var sell = $("#sell_from").val();

            if (sell == "Bitcoin Balance") {
                $(".availsale").show();
            } else {
                $(".availsale").hide();
            }
            $(".acctInfodiv").hide();
            $("#header_acct").html('');
            $("#header_acctname").html('');
            $("#sellfromlabel").html('Sell From');
            $("#sellfrom_pm").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
        } else {

            if (typecurr == "crypto") {
                //var msg = "Selected option is a crypto";
                $("#sellfrom_btc").hide();
                $("#sellfrom_account").hide();
                $("#sellfrom_crypto").show();
                $(".acctInfodiv").hide();
                $("#header_acct").html('');
                $("#header_acctname").html('');
                $("#sellfromlabel").html('Sell From');
                $("#sellfrom_pm").hide();
                $("#acctnoSell").val('');
                $("#acctnameSell").val('');
            } else if (typecurr == "ecurrency") {
                //var msg = "Selected option is an ecurrency";
                $("#sellfrom_btc").hide();
                $("#sellfrom_type").hide();
                $("#sellfrom_account").show();
                $("#sellfrom_crypto").hide();
                $(".acctInfodiv").show();
                $("#header_acct").html(ps + ' Account Number');
                $("#header_acctname").html(ps + ' Account Name');
                if (ps == 'Perfect Money') {
                    var pm_autoEnabled = $("#pm_autoEnabled").val();
                    var pm_manualEnabled = $("#pm_manualEnabled").val();
                    if (pm_manualEnabled || pm_autoEnabled) {
                        $("#sellfromlabel").html('Funding Method');
                    } else {
                        $("#sellfromlabel").hide();
                    }

                    $("#sellfrom_account").hide();
                    $("#sellfrom_pm").show();
                    var sell_from_pm = $("#sell_from_pm").val();
                    if (sell_from_pm == "Automatic" && pm_autoEnabled == "Enabled") {
                        $(".acctInfodiv").hide();
                        $("#acctnoSell").val('');
                        $("#acctnameSell").val('');
                    } else {
                        $(".acctInfodiv").show();
                    }
                } else {
                    $("#sellfromlabel").html('Sell From');
                    $("#sellfrom_account").show();
                    $("#sellfrom_pm").hide();
                }
            }
            $('#currencySell')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="NGN">NGN</option>')
                .val('USD');
            $(".availsale").hide();
        }
    }

    function showcurrencyBuy(ps) {

        var shortcode = $("#currency_buy").find(':selected').data('value');
        if (shortcode) {
            var shortcode = shortcode.toLowerCase();
            var typecurr = getrate(shortcode, 'type');
            var buy = $("#buy_from_acct").val();
        }
        if (ps == "Bitcoin") {
            $('#currencyBuy')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="BTC">BTC</option><option value="NGN">NGN</option>')
                .val('USD');

            $(".availbuy").show();
            $("#buyfrom_btc").show();
            $("#buyfrom_account").hide();
            $("#buy_from_acct").val('');
            $(".acctInfodivbuy").hide();
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
        } else {
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
            $(".acctInfodivbuy").show();
            $("#buyfrom_btc").hide();
            $("#buyfrom_account").show();
            $("#buy_from").val('');
            $(".availbuy").hide();

            if (buy == "Naira Wallet") {
                $(".availbuy").show();
            }

            if (typecurr == "crypto") {
                //var msg = "Selected option is a crypto";
                $("#header_acct_buy").html('Your ' + ps + ' Wallet Address');
                $("#header_acctname_buy").html('Confirm ' + ps + ' Wallet Address');
                $("#buy_type").show();
            } else if (typecurr == "ecurrency") {
                //var msg = "Selected option is an ecurrency";
                $("#header_acct_buy").html('Your ' + ps + ' Account Number');
                $("#header_acctname_buy").html('Your ' + ps + ' Account Name');
                $("#buy_type").hide();
            }
            $('#currencyBuy')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="NGN">NGN</option>')
                .val('USD');
        }
    }

    $(document).ready(function() {
        var ps = $("#currency_sell").val();
        $(".acctInfodiv").hide();
        $("#acctnoSell").val('');
        $("#acctnameSell").val('');
        if (ps != "") {
            showcurrency(ps);
        }
        var buy = $("#currency_buy").val();
        $(".acctInfodivbuy").hide();
        $("#acctnoBuy").val('');
        $("#acctnameBuy").val('');
        if (buy != "") {
            showcurrencyBuy(buy);
        }
    });

    $('#currency_sell').on('change', function() {
        var ops = $(this).val();
        showcurrency(ops);
    });
    $('#currency_buy').on('change', function() {
        var ops = $(this).val();
        showcurrencyBuy(ops);
    });

    $('.acctnoCheck').on('keyup', function() {
        var id = $(this).attr("id");
        switch (id) {
            case 'acctnoSell':
                var ps = $("#currency_sell").val();
                $("#acctnameSell").attr("placeholder", "");
                var idname = "acctnameSell";
                break;

            case 'acctnoBuy':
                var ps = $("#currency_buy").val();
                $("#acctnameBuy").attr("placeholder", "");
                var idname = "acctnameBuy";
                break;

            default:
                break;
        }

        if (ps == "Perfect Money") {
            $("#" + idname).val('');
            var sanitized = $('#' + id).val().replace(/[^0-9]/g, '');
            $('#' + id).val('U' + sanitized);
        }
    });

    $('.acctnoCheck').on('change', function() {
        var id = $(this).attr("id");
        switch (id) {
            case 'acctnoSell':
                var ps = $("#currency_sell").val();
                var top = $(".acctnameSellError").length;
                var idname = "acctnameSell";
                var myname = "Sell";
                break;

            case 'acctnoBuy':
                var ps = $("#currency_buy").val();
                var top = $(".acctnameBuyError").length;
                var idname = "acctnameBuy";
                var myname = "Buy";
                break;

            default:
                break;
        }

        if (ps == "Perfect Money") {
            doneTyping1(myname);
            // var typingTimer1;
            // var doneTypingInterval1 = 1000;
            // clearTimeout(typingTimer1);
            // typingTimer1 = setTimeout(doneTyping1, doneTypingInterval1);
        } else {
            if (top) {
                $("." + idname + "Error").remove();
            }
        }
    });
    // $('#acctnoSell').on('keydown', function () {
    //     var ps = $('#currency_sell').val();
    //     if(ps=="Perfect Money"){
    //         var typingTimer1;
    //         clearTimeout(typingTimer1);
    //     }else{
    //         if(top){
    //             $(".acctnameSellError").remove();
    //         }
    //     }
    // });

    function doneTyping1(name) {
        var lowername = name.toLowerCase();
        var acctno = $('#acctno' + name).val();
        var ecurrency = $('#currency_' + lowername).val();
        var top = $(".acctname" + name + "Error").length;
        var header = "";
        if (lowername == "buy") {
            var header = "_buy";
        }

        if (acctno.length >= "8") {
            $("#acctname" + name).attr("placeholder", "Please wait...");
            $.ajax({
                type: "POST",
                url: "pm_query",
                data: {
                    acctno: acctno,
                    ecurrency: ecurrency
                },
                success: function(result) {
                    if (top) {
                        $(".acctname" + name + "Error").remove();
                    }
                    if (result.includes("ERROR:")) {
                        $("#acctname" + name).val('');
                        $("#acctname" + name).attr("placeholder", "");
                        $("#header_acctname" + header).after('<p class="dangerP acctname' + name + 'Error"><b>Error: Invalid PM Account</b></p>');
                        $("#" + lowername + "Nowbtn").css("opacity", "0.2").attr('disabled', 'disabled');
                    } else {
                        $("#acctname" + name).val(result);
                        $("#" + lowername + "Nowbtn").css("opacity", "").removeAttr('disabled');

                    }

                }
            });
        } else if (acctno.length < 8) {
            $("#acctname" + name).val('');

            if (!top) {
                $("#header_acctname" + header).after('<p class="dangerP acctname' + name + 'Error"><b>Error: Incomplete PM Account Number Entered</b></p>');
            }
        }


    }
    $('#buy_from').on('change', function() {
        var buy = $(this).val();
        if (buy == "Naira Wallet") {
            $(".availbuy").show();
        } else {
            $(".availbuy").hide();
        }
    });
    $('#buy_from_acct').on('change', function() {
        var buy = $(this).val();
        var current = $('.buy_from_acct  .current');
        //alert(current.html());
        if (buy == "Naira Wallet") {
            $(".availbuy").show();
        } else {
            $(".availbuy").hide();
        }
    });
    $("#acctnameBuy").on('keyup', function() {
        var first = $("#acctnoBuy").val();
        var second = $(this).val();
        var top = $(".acctnameBuyError").length;
        var ecurrency = $("#currency_buy").val();
        var shortcode = $("#currency_buy").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var typecurr = getrate(shortcode, 'type');

        if (typecurr == "crypto" && ecurrency != "Bitcoin") {
            if (first != second) {
                if (top) {
                    $(".acctnameBuyError").show();
                } else {
                    $("#header_acctname_buy").after('<p class="dangerP acctnameBuyError"><b>Error: The wallet address must be the same</b></p>');
                }
            } else {
                $(".acctnameBuyError").remove();
            }
        }
    });

    $('#sell_from').on('change', function() {
        var sell = $(this).val();
        if (sell == "Bitcoin Balance") {
            $(".availsale").show();
            $("#sellfrom_type").hide();
        } else {
            $(".availsale").hide();
            if (sell == "External Wallet") {
                $("#sellfrom_type").show();
            }
        }
    });
    $('#sell_from_pm').on('change', function() {
        var sell = $(this).val();
        var pm_autoEnabled = $("#pm_autoEnabled").val();
        var pm_manualEnabled = $("#pm_manualEnabled").val();

        if (sell == "Automatic" && pm_autoEnabled == 'Enabled') {
            $(".acctInfodiv").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
        } else {
            $(".acctInfodiv").show();
        }
    });

    $('#sellNowbtn').click(function() {
        $('#loadingText').show();
        var acctnameSell = "";
        var acctnoSell = "";
        var amount = $('#amountSell').val();
        var unit = $('#currencySell').val();
        var currency_sell = $("#currency_sell").val();
        var csrfbtc = $("#csrfbtc").val();
        var sellType = $("#sell_from_type").val();
        var pm_autoEnabled = $("#pm_autoEnabled").val();
        var pm_manualEnabled = $("#pm_manualEnabled").val();

        var shortcode = $("#currency_sell").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var typecurr = getrate(shortcode, 'type');

        if (currency_sell == "Bitcoin") {
            var sell_from = $('#sell_from').val();
            var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&csrfbtc=" + csrfbtc;
        } else {
            if (typecurr == "ecurrency") {
                var sell_from = $('#sell_from_acct').val();
                var acctnameSell = $('#acctnameSell').val();
                var acctnoSell = $('#acctnoSell').val();
                var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&acctnameSell=" + acctnameSell + "&acctnoSell=" + acctnoSell;
                if (currency_sell == "Perfect Money") {
                    var sell_from = $("#sell_from_pm").val();
                    var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&acctnameSell=" + acctnameSell + "&acctnoSell=" + acctnoSell;
                }
            } else {
                var sell_from = $('#sell_from_crypto').val();
                var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&sellType=" + sellType;
            }
        }

        if (currency_sell == "Perfect Money" && sell_from == "Automatic" && pm_autoEnabled == "Enabled") {
            if (pm_manualEnabled == "Enabled") {
                swal({
                        title: "Are you sure?",
                        text: "If you click yes, you will be redirected to perfect money website to pay for this order..",
                        icon: "warning",
                        buttons: ["Oh no!", "Yes, Proceed!"],
                        dangerMode: false,
                    })
                    .then((willProceed) => {
                        if (willProceed) {
                            var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=Automatic";
                            proceed(mydata);
                        } else {
                            swal("Your funding method has been changed to manual, please provide your PM Account Number!");
                            $('#sell_from_pm').val("Manual");
                            $('#sell_from_pm').niceSelect('update');
                            $(".acctInfodiv").show();
                        }
                    });
            } else {
                swal({
                        title: "Are you sure?",
                        text: "If you click yes, you will be redirected to perfect money website to pay for this order!",
                        icon: "warning",
                        buttons: ["Cancel", "Yes, Proceed!"],
                        dangerMode: false,
                    })
                    .then((willProceed) => {
                        if (willProceed) {
                            var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=Automatic";
                            proceed(mydata);
                        }
                    });
            }

        } else {
            proceed(mydata);
        }

        function proceed(top) {
            $('#sellNowbtn').attr('disabled', 'disabled');
            $(".loadingText").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/quicksell",
                data: top,
                dataType: 'json',
                success: function(result) {
                    $('#sellNowbtn').removeAttr('disabled');
                    $(".loadingText").hide();

                    var mystat = result.status;
                    var mymsg = result.msg;

                    if (mystat != "") {
                        if (mystat == "success") {
                            swal({
                                title: "Sold",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat === "pm-auto") {
                            /* var pst = result.acctnamesell.trim();
                            var divs = result.div.trim(); */
                            $("#currency_sell").before(divs);
                            $(pst).submit();
                        } else if (mystat == "error") {

                            /* var rez = result.acctnamesell.trim();
                            if (rez) {
                                $(".acctInfodiv").show();
                            } */
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        }
    });

    $('#buyNowbtn').click(function() {
        $('#loadingText_buy').show();
        var acctnameBuy = "";
        var acctnoBuy = "";
        var amount = $('#amountBuy').val();
        var unit = $('#currencyBuy').val();
        var currency_buy = $("#currency_buy").val();
        var buy_to_type = $("#buy_to_type").val();

        var shortcode = $("#currency_buy").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var typecurr = getrate(shortcode, 'type');

        if (currency_buy == "Bitcoin") {
            $('#buy_from').val("Naira Wallet");
            var buy_from = $('#buy_from').val();
            $('#buy_from').niceSelect('update');
            var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from;
        } else {
            var buy_from = $('#buy_from_acct').val();
            var acctnameBuy = $('#acctnameBuy').val();
            var acctnoBuy = $('#acctnoBuy').val();
            if (!buy_from || buy_from == null) {
                $('#buy_from_acct').val("Naira Wallet");
                var buy_from = $('#buy_from_acct').val();
                $('#buy_from_acct').niceSelect('update');
                var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from + "&acctnameBuy=" + acctnameBuy + "&acctnoBuy=" + acctnoBuy;
            } else {
                if (typecurr == "crypto") {
                    var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from + "&acctnameBuy=" + acctnameBuy + "&acctnoBuy=" + acctnoBuy + "buy_to_type=" + buy_to_type;
                } else {
                    var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from + "&acctnameBuy=" + acctnameBuy + "&acctnoBuy=" + acctnoBuy;
                }
            }
        }

        if (typecurr == "crypto" && currency_buy != "Bitcoin") {
            if (acctnameBuy != acctnoBuy) {
                $("#loadingText_buy").hide();
                swal({
                    title: "Error",
                    text: 'The Wallet addresses provided must be the same',
                    icon: "error",
                });
            } else {
                if (mydataB)
                    proceedBuy(mydataB);
            }
        } else {
            if (mydataB)
                proceedBuy(mydataB);
        }

        function proceedBuy(topMe) {
            $('#buyNowbtn').attr('disabled', 'disabled');
            $("#loadingText_buy").show();

            function congreat(send) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/dashboard/quickbuy",
                    data: send,
                    dataType: 'json',
                    success: function(result) {
                        $('#buyNowbtn').removeAttr('disabled');
                        $("#loadingText_buy").hide();

                        var mystat = result.status;
                        var mymsg = result.msg;

                        if (mystat != "") {
                            if (mystat == "success") {
                                swal({
                                    title: "Order Placed",
                                    text: '' + mymsg,
                                    icon: "success",
                                }).then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                            } else if (mystat == "error") {

                                /* var rez = result.acctnamebuy.trim();
                                if (rez) {
                                    $(".acctInfodivbuy").show();
                                } */
                                swal({
                                    title: "Error",
                                    text: '' + mymsg,
                                    icon: "error",
                                });
                            } else {
                                swal({
                                        title: "Unknown error",
                                        text: 'Please try again',
                                        icon: "error",
                                    })
                                    .then((value) => {
                                        if (value) {
                                            location.reload();
                                        }
                                    });

                            }
                        }
                    }
                });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/getInstructions",
                data: {
                    type: 'deposit'
                },
                success: function(result) {
                    var great = result.trim();
                    if (great && buy_from != "Naira Wallet") {

                        var wrapper = document.createElement("span");
                        wrapper.innerHTML = '<h4><strong>WARNING! WARNING!!</strong><i>DO NOT INCLUDE BITCOIN OR BTC ,NO THIRD PARTY AND COMPANY PAYMENT</i></h4><p><i><strong>NOTE-</strong>PAYMENT MUST COME FROM YOUR PERSONAL NAME USED&nbsp;</i></p><p>==================================================</p><p><i><strong>NOTE</strong>-<strong>HOW CBN TRACK BITCOIN TRANSACTION &nbsp;track bitcoin transaction</strong> when you include bitcoin or btc or dollar or perfect money or USDT or any form of crypto-currency in &nbsp;ur online bank pay remark or memo or when you are paying cash or any means of &nbsp;payment.</i><br>===================================================</p><p><i><strong>&nbsp;What do i need put in my memo/remark when transferring money to us ? You can put the Trans ID OR UR user I.D on nairadirect or your name, generated for you after making the order for Naira deposit.An invoice will be generated for every order you make and you can make use of that when you are transferring</strong> money into our bank&nbsp;</i><br>====================================================</p><p><i><strong>NOTE</strong>- What if include bitcoin in my payment remark? we would NOT return your money because, we believe CBN would have noticed such a payment that carries or comes with the bitcoin as a remark and CBN is responsible for withholding the such payment</i></p>';

                        swal({
                            title: 'Warning Notice!',
                            content: wrapper,
                            icon: "warning",
                            buttons: ["Cancel", "Yes, I agree!"],
                            dangerMode: false,
                            closeOnClickOutside: false,
                            closeOnEsc: false,
                        }).then((value) => {
                            if (value) {
                                //Continue
                                congreat(topMe);
                            } else {
                                $('#buyNowbtn').removeAttr('disabled');
                                $("#loadingText_buy").hide();
                            }
                        });
                    } else {
                        congreat(topMe);
                    }
                }
            });
        }
    });

    $(".cancel_me_sell").click(function(e) {
        e.preventDefault();

        var inv = $(this).attr("data-value");

        swal({
                title: "Are you sure?",
                text: "Once cancelled, you will not be able to continue with this order#" + inv + "!",
                icon: "warning",
                buttons: ["Oh no!", "Yes, Cancel!"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "/dashboard/cancel_sell",
                        data: {
                            inv: inv
                        },
                        success: function(result) {
                            swal("Poof! Your order #" + inv + " has been cancelled!", {
                                    icon: "success",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                        }
                    });
                } else {
                    swal("Your order is still active!");
                }
            });
        return false;
    });
    $(".invoice_me").click(function(e) {
        e.preventDefault();

        var inv = $(this).attr("data-value");

        window.location.href = "/dashboard/sendnotice?i=" + inv;
        return false;
    });
    $(".submitNotice").click(function() {

        $('.submitNotice').attr('disabled', 'disabled');
        $(".loadingText").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/dashboard/palertz_sell",
            data: $("#notice-form").serialize(),
            dataType: 'json',
            success: function(result) {
                $('.submitNotice').removeAttr('disabled');
                $(".loadingText").hide();

                var mystat = result.status;
                var mymsg = result.msg;

                if (mystat !== "") {
                    if (mystat === "success") {
                        swal({
                            title: "Notice Sent",
                            text: '' + mymsg,
                            icon: "success",
                        });
                        window.open(
                            'orders',
                            '_self'
                        );
                    } else if (mystat === "error") {
                        swal({
                            title: "Error",
                            text: '' + mymsg,
                            icon: "error",
                        });
                    } else {
                        swal({
                                title: "Unknown error",
                                text: 'Please try again',
                                icon: "error",
                            })
                            .then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });

                    }
                }
            }
        });
    });

    /**
    $("#bit_amount").on('keyup', function (){
        checkDec(this);
        var s = $(this).val();
        var u = this.value.substring(0,this.value.length - 1);
        $("#passdiv_send").hide();
        var wallet = $("#trf_wallet").val();

        if(s > 0){
            if(s.length > 10){
				$(this).val(u);
            }
            if(wallet){
                $("#passdiv_send").show();
            }
        }
    });
    **/

    $("#bit_amount").on('keyup', function() {
        checkDec(this);

        var valu = this.value.replace(/[^0-9.]/g, "");
        $(this).val(valu);

        var s = $(this).val();
        var u = this.value.substring(0, this.value.length - 1);
        $("#passdiv_send").hide();
        var wallet = $("#trf_wallet").val();

        var fee_method = $('#fee_method_btc').val();
        var depfee = $('#depfee').val();
        var withfee = $('#transfee_btc').val();
        var balngn = $('#balbtc').val();
        var above_amount = $("#above_amount_btc").val();
        var enableFee = false;
        var rateUnit = $("#rateUnit").val();

        if (rateUnit == "BTC") {
            var showbtc_unit = rateUnit;
            var showusd_unit = "";
        } else if (rateUnit == "USD") {
            var showbtc_unit = "";
            var showusd_unit = '$';
        }

        if (above_amount) {
            if (Number(above_amount) <= s) {
                //Enable transfer fee
                var enableFee = true;
            }
        } else {
            //Enable transfer fee
            var enableFee = true;
        }

        if ($('#transfee_btc').length) {
            var formName = "withdrawal";
        } else if ($('#depfee').length) {
            var formName = "deposit";
        }

        if (s > 0) {
            if (s.length > 10) {
                $(this).val(u);
            }
            /**Show transfer fee */
            switch (formName) {
                case 'deposit':

                    break;
                case 'withdrawal':
                    if (enableFee) {
                        if (fee_method == 'percentage') {
                            var newamt = withfee / 100;
                            var newamt = Number(newamt * s);
                            var newamt1 = parseFloat(newamt).toFixed(8);
                            var newamt = newamt1 + 'BTC';

                        } else {
                            var newamt = withfee ? withfee + 'BTC' : "Free";
                            var newamt1 = withfee;

                            if (showusd_unit && newamt1) {
                                //convert fee to usd;
                                var btcworth = getrate('live', null);
                                var newamt1 = parseFloat(newamt1 / btcworth).toFixed(8);
                                var newamt = newamt1 + 'BTC';
                            }
                        }

                    } else {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }

                    if (newamt1 == '0.00000000' || newamt1 == '0.00') {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }



                    $('.showwithfee_btc').html(newamt);

                    var availNow1 = balngn - s - newamt1;

                    var availNow = parseFloat(availNow1).toFixed(8);
                    if (availNow == '0.00000000' || availNow == '0.00') {
                        var availNow = 0;
                    }
                    $('#availBal_btc').removeClass('hidden');
                    $('#availBalwith_btc').removeClass('hidden');
                    $('#balspanOne_btc').html(balngn + 'BTC');
                    $('.balspanwith_btc').html(availNow + 'BTC');
                    if (availNow < 0) {
                        $('.balspanwith_btc').html('0 BTC');
                    }
                    break;
                default:
                    break;
            }
            if (wallet) {
                $("#passdiv_send").show();
            }
        } else {

            if (formName == "withdrawal") {
                var withS = withfee ? withfee + 'BTC' : "Free";
            }
            if (formName == "deposit") {
                var depS = depfee ? depfee + 'BTC' : "Free";
            }

            if (fee_method == 'percentage') {
                var withS = withfee + "% of your sent amount";
                var depS = depfee + "% of your deposit amount";
            } else {
                if (showusd_unit && withfee) {
                    //convert fee to usd;
                    var btcworth = getrate('live', null);
                    var newamt1 = parseFloat(withfee / btcworth).toFixed(8);
                    var withS = newamt1 + 'BTC';
                }
            }
            $('.showdepfee_btc').html(depS);
            $('.showwithfee_btc').html(withS);
            $('#balspanOne_btc').html(balngn + 'BTC');
            $('#availBal_btc').removeClass('hidden');
            $('#availBalwith_btc').addClass('hidden');

        }
    });
    $("#trf_wallet").on('change', function() {
        var s = $(this).val();
        //var u = this.value.substring(0,this.value.length - 1);

        if (s.length >= 26) {
            $(".error_address").removeClass("dangerP");
            $(".error_address").html('<b>Checking address...</b>');
            $(".error_address").show();
            //Check if btc wallet address is valid
            $.ajax({
                type: "POST",
                url: "addr_query",
                data: {
                    ecurrency: s
                },
                success: function(result) {
                    if (result == "false") {
                        $(".error_address").addClass("dangerP");
                        $(".error_address").html('<b>Error: Invalid bitcoin address</b>');
                        $(".error_address").show();
                        $('#send_submit').attr('disabled', 'disabled');
                        $('#trf_wallet').css('border-color', 'red');
                        $('#trf_wallet').focus();
                        return false;
                    }
                    if (result == "true") {
                        $(".error_address").html('');
                        $(".error_address").hide();
                        $('#send_submit').removeAttr('disabled');
                        $('#trf_wallet').css('border-color', 'green');
                        return true;
                    }

                }
            });
        } else {
            if (s.length >= 1) {
                $(".error_address").addClass("dangerP");
                $(".error_address").html('<b>Error: Invalid bitcoin address</b>');
                $(".error_address").show();
                $('#send_submit').attr('disabled', 'disabled');
                $('#trf_wallet').css('border-color', 'red');
                $('#trf_wallet').focus();
            } else {
                $(".error_address").html('');
                $(".error_address").hide();
                $('#send_submit').removeAttr('disabled');
                $('#trf_wallet').css('border-color', '');
            }
        }
    });
    $("#send_pass").on('change', function() {
        var type = $(this).attr('type');
        if (type == "text") {
            var sanitized = $(this).val().replace(/\s/g, '');
            $(this).val(sanitized);
        }
    });

    $('#send_submit').click(function() {
        var wallet = $("#trf_wallet").val();
        var bit_amount = $("#bit_amount").val();
        var send_pass = $("#send_pass").val();

        if (wallet && bit_amount && send_pass) {

            $('#send_submit').attr('disabled', 'disabled');
            $("#loadingText_send").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/sendBtc",
                data: $("#myBTCform").serialize(),
                dataType: 'json',
                success: function(result) {
                    $('#send_submit').removeAttr('disabled');
                    $("#loadingText_send").hide();
                    console.log(result.error);
                    var mystat = result.status;
                    var mymsg = result.error;
                    var mymsg2 = result.success;

                    if (mystat != "") {
                        if (mystat == "success") {
                            $("#trf_wallet").val('');
                            $("#bit_amount").val('')
                            swal({
                                title: "BTC Sent",
                                text: '' + mymsg2,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat == "password_error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                            if (value) {
                                location.reload();
                            }
                        }
                        else if (mystat == "balance_error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                            if (value) {
                                location.reload();
                            }
                        }
                        else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            $("#passdiv_send").show();
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
    $("#trf_amount").on('keyup', function() {
        checkDec(this);

        var valu = this.value.replace(/[^0-9.]/g, "");
        $(this).val(valu);

        var s = $(this).val();
        var u = this.value.substring(0, this.value.length - 1);
        var fee_method = $('#fee_method').val();
        var depfee = $('#depfee').val();
        var withfee = $('#withfee').val();
        var balngn = $('#balngn').val();
        var above_amount = $("#above_amount").val();
        var enableFee = false;

        if (above_amount) {
            if (Number(above_amount) <= s) {
                //Enable transfer fee
                var enableFee = true;
            }
        } else {
            //Enable transfer fee
            var enableFee = true;
        }

        if ($('#withfee').length) {
            var formName = "withdrawal";
        } else if ($('#depfee').length) {
            var formName = "deposit";
        }

        if (s > 0) {
            if (s.length > 10) {
                $(this).val(u);
            }
            switch (formName) {
                case 'deposit':
                    if (enableFee) {
                        if (fee_method == 'percentage') {
                            var newamt = depfee / 100;
                            var newamt = newamt * s;
                            var newamt1 = parseFloat(newamt).toFixed(2);
                            var newamt = formatter.format(newamt);
                            if (newamt == '₦0.00') {
                                var newamt = 'Free';
                            }
                        } else {
                            var newamt = depfee ? '₦' + depfee : "Free";
                            var newamt1 = depfee;
                        }
                    } else {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }


                    $('.showdepfee').html(newamt);
                    var availNowB = Number(balngn) + Number(s);
                    var availNow1 = availNowB - newamt1;

                    var availNow = parseFloat(availNow1).toFixed(2);

                    $('#availBal').removeClass('hidden');
                    $('#availBalwith').removeClass('hidden');
                    $('#balspanOne').html('₦' + balngn);
                    $('.balspanwith').html(formatter.format(availNow));

                    break;
                case 'withdrawal':
                    if (enableFee) {
                        if (fee_method == 'percentage') {
                            var newamt = withfee / 100;
                            var newamt = newamt * s;
                            var newamt1 = parseFloat(newamt).toFixed(2);
                            var newamt = formatter.format(newamt1);
                            if (newamt == '₦0.00') {
                                var newamt = 'Free';
                            }
                        } else {
                            var newamt = withfee ? '₦' + withfee : "Free";
                            var newamt1 = withfee;
                        }

                    } else {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }

                    $('.showwithfee').html(newamt);
                    var availNow1 = balngn - s - newamt1;

                    var availNow = parseFloat(availNow1).toFixed(2);
                    $('#availBal').removeClass('hidden');
                    $('#availBalwith').removeClass('hidden');
                    $('#balspanOne').html('₦' + balngn);
                    $('.balspanwith').html('₦' + availNow);
                    if (availNow < 0) {
                        $('.balspanwith').html('₦0.00');
                    }
                    break;
                default:
                    break;
            }

        } else {
            if (formName == "withdrawal") {
                var withS = withfee ? '₦' + withfee : "Free";
            }
            if (formName == "deposit") {
                var depS = depfee ? '₦' + depfee : "Free";
            }
            if (fee_method == 'percentage') {
                var withS = withfee + "% of your withdrawal amount";
                var depS = depfee + "% of your deposit amount";
            }
            $('.showdepfee').html(depS);
            $('.showwithfee').html(withS);
            $('#balspanOne').html('₦' + balngn);
            $('#availBal').removeClass('hidden');
            $('#availBalwith').addClass('hidden');

        }
    });
    $('#with_submit').click(function() {
        var wallet = $("#bank_name").val();
        var bit_amount = $("#trf_amount").val();
        var withfee = $("#withfee").val();
        var balspanOne = $("#balspanOne").val();
        var rep = $('#bank_name').find(':selected').data('value');

        if (wallet && bit_amount) {

            $('#with_submit').attr('disabled', 'disabled');
            $("#loadingText_with").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/sendnaira",
                data: {
                    trf_amount: bit_amount,
                    wallet: wallet,
                    recipient: rep,
                    withfee: withfee,
                    balspanOne: balspanOne,
                },
                dataType: 'json',
                success: function(result) {
                    $('#with_submit').removeAttr('disabled');
                    $("#loadingText_with").hide();

                    var mystat = result.status;
                    var mymsg = result.msg;

                    if (mystat !== "") {
                        if (mystat == "success") {
                            $("#trf_amount").val('')
                            swal({
                                title: "Withdrawal Sent",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat == "error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
    $('#dep_submit').click(function() {
        var wallet = $("#deposit_method").val();
        var bit_amount = $("#trf_amount").val();

        if (wallet && bit_amount) {

            $('#dep_submit').attr('disabled', 'disabled');
            $("#loadingText_dep").show();
            var great = null;

            function congret() {
                $('#dep_submit').attr('disabled', 'disabled');
                $("#loadingText_dep").show();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/dashboard/depositnaira",
                    data: $("#myDepform").serialize(),
                    dataType: 'json',
                    success: function(result) {
                        $('#dep_submit').removeAttr('disabled');
                        $("#loadingText_dep").hide();

                        var mystat = result.status;
                        var mymsg = result.msg;

                        if (mystat != "") {
                            if (mystat == "success") {
                                $("#trf_amount").val('')
                                swal({
                                    title: "Deposit Request Made",
                                    text: '' + mymsg,
                                    icon: "success",
                                }).then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                            } else if (mystat == "error") {
                                swal({
                                    title: "Error",
                                    text: '' + mymsg,
                                    icon: "error",
                                });
                            } else {
                                swal({
                                        title: "Unknown error",
                                        text: 'Please try again',
                                        icon: "error",
                                    })
                                    .then((value) => {
                                        if (value) {
                                            location.reload();
                                        }
                                    });

                            }
                        }
                    }
                });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/getInstructions",
                data: {
                    type: 'deposit'
                },
                success: function(result) {
                    great = result;
                    if (great) {

                        var wrapper = document.createElement("span");
                        wrapper.innerHTML = '<h4><strong>WARNING! WARNING!!</strong><i>DO NOT INCLUDE BITCOIN OR BTC ,NO THIRD PARTY AND COMPANY PAYMENT</i></h4><p><i><strong>NOTE-</strong>PAYMENT MUST COME FROM YOUR PERSONAL NAME USED&nbsp;</i></p><p>==================================================</p><p><i><strong>NOTE</strong>-<strong>HOW CBN TRACK BITCOIN TRANSACTION &nbsp;track bitcoin transaction</strong> when you include bitcoin or btc or dollar or perfect money or USDT or any form of crypto-currency in &nbsp;ur online bank pay remark or memo or when you are paying cash or any means of &nbsp;payment.</i><br>===================================================</p><p><i><strong>&nbsp;What do i need put in my memo/remark when transferring money to us ? You can put the Trans ID OR UR user I.D on nairadirect or your name, generated for you after making the order for Naira deposit.An invoice will be generated for every order you make and you can make use of that when you are transferring</strong> money into our bank&nbsp;</i><br>====================================================</p><p><i><strong>NOTE</strong>- What if include bitcoin in my payment remark? we would NOT return your money because, we believe CBN would have noticed such a payment that carries or comes with the bitcoin as a remark and CBN is responsible for withholding the such payment</i></p>';

                        $('#dep_submit').removeAttr('disabled');
                        $("#loadingText_dep").hide();

                        swal({
                            title: 'Warning Notice!',
                            content: wrapper,
                            icon: "warning",
                            buttons: ["Cancel", "Yes, I agree!"],
                            dangerMode: false,
                            closeOnClickOutside: false,
                            closeOnEsc: false,
                        }).then((value) => {
                            if (value) {
                                //Continue
                                congret();
                            } else {
                                $('#dep_submit').removeAttr('disabled');
                                $("#loadingText_dep").hide();
                            }
                        });
                    } else {
                        congret();
                    }
                }
            });

        } else {
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });

    $('.bitcoin-address-action-copy').click(function() {
        var $temp = $("<input>");
        $("body").append($temp);
        var repZ = $(this).attr("data-info");

        $temp.val($.trim($("." + repZ).text())).select();
        document.execCommand("copy");
        $temp.remove();

        switch (repZ) {
            case 'walletinfo':
                var msg = "Wallet address copied";
                break;
            case 'brefID':
                var msg = "Referral ID Copied";
                break;
            case 'brefLink':
                var msg = "Referral Link Copied";
                break;
            default:
                break;
        }

        swal({
            title: "Hurray :)",
            text: '' + msg,
            icon: "success",
        });

    });

    $(".pwrds").on("keyup", function() {
        var em = $(this).val();
        var id = $(this).attr("id");
        var er = "#error_" + id;
        var a = (em.length < 6 && em != "");
        var min = "Minimum 8 characters.";
        var low = "A lowercase letter.";
        var upper = "A capital (uppercase) letter.";
        var num = "A number.";

        var er_min = "#errormin_" + id;
        var er_low = "#errorlow_" + id;
        var er_upper = "#errorupper_" + id;
        var er_num = "#errornum_" + id;
        var er_secure = "#pass-secure_" + id;

        var min_pattern = /^.{8,}/;
        var upper_pattern = /^(?=.*[A-Z])/;
        var low_pattern = /^(?=.*[a-z])/;
        var num_pattern = /^(?=.*\d)/;
        var pass_pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

        var a_min = (em.length >= 8 && em != "");
        var a_upper = (upper_pattern.test(em));
        var a_low = (low_pattern.test(em));
        var a_num = (num_pattern.test(em));
        var allCheck = (pass_pattern.test(em));

        var error = true;
        //if min

        if (a_min == true) {

            $(er_min).css('color', '#415094');
            $(er_min).html('<i class="ti-check-box"></i> ' + min);
            $(er_min).show();
            $(er).show();

        } else {
            $(er_min).css('color', 'red');
            $(er_min).html('<i class="ti-close"></i> ' + min);
            $(er_min).show();
            $(er).show();
            $(this).css('border-color', 'red');
        }
        //if low
        if (a_low == true) {
            $(er_low).css('color', '#415094');
            $(er_low).html('<i class="ti-check-box"></i> ' + low);
            $(er_low).show();
            $(er).show();

        } else {
            $(er_low).css('color', 'red');
            $(er_low).html('<i class="ti-close"></i> ' + low);
            $(er_low).show();
            $(er).show();
            $(this).css('border-color', 'red');
        }
        //if upper
        if (a_upper == true) {

            $(er_upper).css('color', '#415094');
            $(er_upper).html('<i class="ti-check-box"></i> ' + upper);
            $(er_upper).show();
            $(er).show();

        } else {
            $(er_upper).css('color', 'red');
            $(er_upper).html('<i class="ti-close"></i> ' + upper);
            $(er_upper).show();
            $(er).show();
            $(this).css('border-color', 'red');
        }

        //if num
        if (a_num == true) {

            $(er_num).css('color', '#415094');
            $(er_num).html('<i class="ti-check-box"></i> ' + num);
            $(er_num).show();
            $(er).show();

        } else {
            $(er_num).css('color', 'red');
            $(er_num).html('<i class="ti-close"></i> ' + num);
            $(er_num).show();
            $(er).show();
            $(this).css('border-color', 'red');
        }

        if (em == "") {
            $(er_min).css('color', 'red');
            $(er_min).html('<i class="ti-close"></i> ' + min);

            $(er_low).css('color', 'red');
            $(er_low).html('<i class="ti-close"></i> ' + low);

            $(er_upper).css('color', 'red');
            $(er_upper).html('<i class="ti-close"></i> ' + upper);

            $(er_num).css('color', 'red');
            $(er_num).html('<i class="ti-close"></i> ' + num);
            $(er_secure).hide();
            $(er).show();
            $(this).css('border-color', 'red');

        } else if (allCheck == true) {
            var po = $('#pwrd').val();
            var to = $('#pwrd2').val();

            if (id === "pwrd") {
                $(er).hide();
                $(this).css('border-color', '#f4f7f9');
                $(er_secure).show();
                var error = false;
            }
            if (id === "pwrd2" && po == to) {
                $(er).hide();
                $(this).css('border-color', '#f4f7f9');
                var error = false;
            }
            return true;
        } else {
            var error = true;
            $(er_secure).hide();
        }

        var p = $('#pwrd').val();
        var t = $('#pwrd2').val();

        if (t != "" && p != "" && p != t) {
            $('#error_pwrd2').css('color', 'red');
            $('#error_pwrd2').html('<i class="ti-close"></i> New Password and Retype New Password must be the same');
            $("#error_pwrd2").show();
            $('#pwrd2').css('border-color', 'red');
            var error = true;
            return false;
        } else if (t != "" && p != "" && p === t) {
            $('#error_pwrd2').html('');
            $("#error_pwrd2").hide();
            $('#pwrd2').css('border-color', '#f4f7f9');
        }



        if (!error) {
            $(er).hide();
            $(this).css('border-color', '#f4f7f9');
            return true;
        }
    });
    $("#username_sett").on("keyup", function() {
        //var userRegex = /^[a-zA-Z0-9]+$/;
        var sanitized = $(this).val().replace(/[^a-zA-Z0-9]/g, '');
        $(this).val(sanitized);
    });
    $(".acct_nos").on("keyup", function() {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
        $(this).attr('maxlength', '10');
    });
    $(".bvn_nos").on("keyup", function() {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
        $(this).attr('maxlength', '11');
    });

    $(".phones").on("keyup", function() {
        var em = $(this).val();
        var id = $(this).attr("id");
        var ids = id.replace("_sett", "");
        var er = "#error_" + ids;

        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
        $(this).attr('maxlength', '11');

        var min = "Provide a valid Nigerian phone number.";

        var er_num = "#errornum_" + ids;

        var num_pattern = /^(?=.*\d)/;
        var pass_pattern = /^(07|08|09)[0-1]{1}[0-9]{8}$/;

        var a_min = (em.length == 11 && em != "");
        var a_num = (num_pattern.test(em));
        var allCheck = (pass_pattern.test(em));

        var po = $('#phone_sett').val();
        var to = $('#alt_phone_sett').val();

        var error = true;

        if (a_num === false || a_min === false || allCheck === false) {

            $(er_num).css('color', 'red');
            $(er_num).html('<i class="ti-close"></i> ' + min);
            $(er_num).show();
            $(er).removeClass('hidden');
            $(this).css('border-color', 'red');
            if (id === "alt_phone_sett" && to === "") {
                $(er).addClass('hidden');
                $(this).css('border-color', '');
                var error = false;
            }
        } else if (allCheck === true) {

            if (id === "phone_sett") {
                $(er).addClass('hidden');
                $(this).css('border-color', '');
                var error = false;
            }
            if (id === "alt_phone_sett" && po !== to) {
                $(er).addClass('hidden');
                $(this).css('border-color', '');
                var error = false;
            }
            if (id === "alt_phone_sett" && po === to) {
                $(er_num).css('color', 'red');
                $(er_num).html('<i class="ti-close"></i> Phone Number and Second Phone Number must not be the same!');
                $(er_num).show();
                $(er).removeClass('hidden');
                $(this).css('border-color', 'red');
            }
            return true;
        }

        if (!error) {
            $(er).addClass('hidden');
            //$(er).hide();
            $(this).css('border-color', '');
            return true;
        }
    });

    $(".phonesVer").on("keyup", function() {
        var em = $(this).val();
        var id = $(this).attr("id");
        var ids = id.replace("_ver", "");
        var er = "#error_" + ids;

        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
        $(this).attr('maxlength', '11');

        var min = "Provide a valid Nigerian phone number.";

        var er_num = "#error_" + ids;

        var num_pattern = /^(?=.*\d)/;
        var pass_pattern = /^(07|08|09)[0-1]{1}[0-9]{8}$/;

        var a_min = (em.length == 11 && em != "");
        var a_num = (num_pattern.test(em));
        var allCheck = (pass_pattern.test(em));

        var po = $('#phone_ver').val();
        var to = $('#alt_phone_ver').val();

        var error = true;
        $('#ver_submit').attr('disabled', 'disabled');
        $('#ver_submit').css("opacity", "0.2");

        if (a_num == false || a_min == false || allCheck == false) {

            $(er_num).css('color', 'red');
            $(er_num).html('<i class="ti-close"></i> ' + min);
            $(er_num).show();
            $(er).removeClass('hidden');
            $(this).css('border-color', 'red');
            if (id === "alt_phone_ver" && to === "") {
                $(er).addClass('hidden');
                $(this).css('border-color', '');
                var error = false;
                $('#ver_submit').removeAttr('disabled');
                $('#ver_submit').css("opacity", "");
            }
        } else if (allCheck == true) {

            if (id === "phone_ver") {
                $(er).addClass('hidden');
                $(this).css('border-color', '');
                var error = false;
                $('#ver_submit').removeAttr('disabled');
                $('#ver_submit').css("opacity", "");
            }
            if (id === "alt_phone_ver" && po != to) {
                $(er).addClass('hidden');
                $(this).css('border-color', '');
                var error = false;
                $('#ver_submit').removeAttr('disabled');
                $('#ver_submit').css("opacity", "");
            }
            if (id === "alt_phone_ver" && po == to) {
                $(er_num).css('color', 'red');
                $(er_num).html('<i class="ti-close"></i> Phone Number and Second Phone Number must not be the same!');
                $(er_num).show();
                $(er).removeClass('hidden');
                $(this).css('border-color', 'red');
                $('#ver_submit').attr('disabled', 'disabled');
                $('#ver_submit').css("opacity", "0.2");
            }
            return true;
        }

        if (!error) {
            $(er).addClass('hidden');
            //$(er).hide();
            $(this).css('border-color', '');
            $('#ver_submit').removeAttr('disabled');
            $('#ver_submit').css("opacity", "");
            return true;
        }
    });

    $("#removepic").click(function(e) {
        e.preventDefault();
        var answer = $("#answer1").val();
        $.ajax({
            type: "POST",
            url: "submitsettings",
            data: {
                prof: 'photo',
                type: 'remove',
                answer1: answer
            },
            dataType: 'json',
            success: function(result) {
                $('#sett_submit').removeAttr('disabled');
                $("#loadingText_sett").hide();

                var mystat = result.status.trim();
                var mymsg = result.msg.trim();

                if (mystat != "") {
                    if (mystat == "success") {
                        swal({
                            title: "Update Successful",
                            text: '' + mymsg,
                            icon: "success",
                        }).then((value) => {
                            if (value) {
                                window.open(
                                    'profile',
                                    '_self'
                                );
                            }
                        });
                    } else if (mystat == "error") {
                        swal({
                            title: "Error",
                            text: '' + mymsg,
                            icon: "error",
                        });
                    } else {
                        swal({
                                title: "Unknown error",
                                text: 'Please try again',
                                icon: "error",
                            })
                            .then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });

                    }
                }
            }
        });
    });

    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        var myVar = setInterval(function() {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);


            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);

        if (display.hasClass('stop')) {
            clearInterval(myVar);
            var myVar = 0;
        }
    }

    function showtimer(mytime) {

        $(".smslimit").addClass('hidden');
        $("#mytimer").show();
        var times = mytime * 1000;

        // jQuery(function ($) {
        var fiveMinutes = mytime * 1,
            display = $('#time');
        startTimer(fiveMinutes, display);
        $('#sett_submit').attr('disabled', 'disabled');
        $('#sett_submit').css("opacity", "0.1");
        // });

        var myVar2 = setTimeout(function() {
            $("#mytimer").hide();
            $(".resendsms").show();
            $("#time").html('');
        }, times);

        if ($("#time").hasClass('stop')) {
            clearTimeout(myVar2);
            var myVar2 = 0;
        }
    }


    $('#sett_submit').click(function() {
        var prof = $("#prof").val();

        if (prof) {

            $('#sett_submit').attr('disabled', 'disabled');
            $("#loadingText_sett").show();
            $(".resendsms").hide();
            $("#time").html('');
            $(".smslimit").addClass('hidden');

            if (prof === "photo") {
                var formElement = $(this).closest('form')[0];
                var fd = new FormData(formElement);
                var files = $('#photo_sett')[0].files[0];
                fd.append('photo_sett', files);
                var $process = false;
                var $false = false;
            } else {
                var fd = $('#mySettform').serialize();
                var $process = "application/x-www-form-urlencoded";
                var $false = true;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/changePhoto",
                data: fd,
                processData: $false,
                contentType: $process,
                dataType: "json",
                success: function(result) {
                    $('#sett_submit').removeAttr('disabled');
                    $("#loadingText_sett").hide();

                    var mystat = result.status;
                    var mymsg = result.msg;
                    $('#time').removeClass('stop');
                    $('#time').addClass('start');

                    if (mystat !== "") {
                        if (mystat === "success") {
                            swal({
                                title: "Update Successful",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    window.open(
                                        'profile',
                                        '_self'
                                    );
                                }
                            });
                        } else if (mystat === "next") {
                            swal({
                                title: "Almost There",
                                text: '' + mymsg,
                                icon: "warning",
                            });
                            window.open(
                                'settings?type=nok2',
                                '_self'
                            );
                        } else if (mystat === "error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else if (mystat === "verify") {
                            swal("" + mymsg, {
                                    content: "input",
                                    button: {
                                        text: "Submit",
                                        closeModal: false,
                                    },
                                })
                                .then((name) => {
                                    if (!name) throw null;

                                    return fetch(`settings_password?term=${name}`);
                                })
                                .then(results => {
                                    return results.json();
                                })
                                .then(json => {
                                    const vcode = json.mycode;
                                    const mmy = json.mmy;

                                    if (!vcode) {
                                        return swal("The code you provided is incorrect, try again");
                                    }

                                    swal({
                                        title: "Update Successful",
                                        text: mmy,
                                        icon: 'success',
                                    }).then((value) => {
                                        if (value) {
                                            window.open(
                                                'profile',
                                                '_self'
                                            );
                                        }
                                    });
                                })
                                .catch(err => {
                                    if (err) {

                                        if ($("#time").hasClass('start')) {
                                            $(".smslimit").addClass('hidden');
                                            showtimer('60');
                                        } else {
                                            $(".smslimit").removeClass('hidden');
                                        }

                                        swal("Oh noes!", "The code you provided is incorrect, try again!", "error");
                                    } else {
                                        swal.stopLoading();
                                        swal.close();
                                    }
                                });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
    $(".buyptab").click(function() {
        $(".buypricediv1").show();
        $(".sellpricediv1").hide();
        $('.buyptab').css('background', '#77c454');
        $('.sellptab').css('background', '');
        $("#typepr").val('b');
    });

    $(".sellptab").click(function() {
        $(".buypricediv1").hide();
        $(".sellpricediv1").show();
        $('.buyptab').css('background', '');
        $('.sellptab').css('background', '#ff788e');
        $("#typepr").val('s');
    });
    $(window).resize(function() {
        var pricedesk = $('.pricedesk');
        if (pricedesk.length) {
            //If mobile
            if (screen.width < "1200") {
                var typepr = $("#typepr").val();

                switch (typepr) {
                    case 'b':
                        $(".buypricediv1").show();
                        $(".sellpricediv1").hide();
                        break;
                    case 's':
                        $(".buypricediv1").hide();
                        $(".sellpricediv1").show();
                        break;
                    default:
                        break;
                }
            }
            //If desktop
            if (screen.width >= "1200") {
                $(".buypricediv1").show();
                $(".sellpricediv1").show();
            }
        }
    });
    $('#ver_next').click(function() {
        //First or second page
        var verpage = $("#verpage").val();

        switch (verpage) {
            case '1':
                //go to second page
                $(".firstver").addClass('hidden');
                $(".secondver").removeClass('hidden');
                $("#ver_back").html('<i class="ti-arrow-left f_s_14 mr-2"></i> Back');
                $("#ver_back").removeClass('hidden');
                $("#ver_submit").addClass('hidden');
                $(".perinf").removeClass('active');
                $(".bankinf").addClass('active');
                $(".continf").removeClass('active');
                $("#verpage").val('2');
                break;
            case '2':
                //go to third/last page
                $(".firstver").addClass('hidden');
                $(".secondver").addClass('hidden');
                $(".thirdver").removeClass('hidden');
                $("#ver_back").removeClass('hidden');
                $("#ver_submit").removeClass('hidden');
                $("#ver_next").addClass('hidden');
                $(".perinf").removeClass('active');
                $(".bankinf").removeClass('active');
                $(".continf").addClass('active');
                $("#verpage").val('3');
                break;
            default:
                break;
        }

    });

    $('#ver_back').click(function() {
        //second or last(third) page
        var verpage = $("#verpage").val();

        switch (verpage) {

            case '1':
                //Back to profile page
                window.open(
                    'profile',
                    '_self'
                );
                break;

            case '2':
                //Back to first page
                $(".firstver").removeClass('hidden');
                $(".secondver").addClass('hidden');
                $(".thirdver").addClass('hidden');
                $("#ver_back").html('<i class="ti-arrow-left f_s_14 mr-2"></i> Back to my Profile');
                $("#ver_back").removeClass('hidden');
                $("#ver_next").removeClass('hidden');
                $("#ver_submit").addClass('hidden');
                $(".perinf").addClass('active');
                $(".bankinf").removeClass('active');
                $(".continf").removeClass('active');
                $("#verpage").val('1');
                break;
            case '3':
                //Back to second page
                $(".firstver").addClass('hidden');
                $(".secondver").removeClass('hidden');
                $(".thirdver").addClass('hidden');
                $("#ver_back").removeClass('hidden');
                $("#ver_next").removeClass('hidden');
                $("#ver_submit").addClass('hidden');
                $(".perinf").removeClass('active');
                $(".bankinf").addClass('active');
                $(".continf").removeClass('active');
                $("#verpage").val('2');
                break;
            default:
                break;
        }
    });

    $('#ver_submit').click(function() {
        var prof = $("#first_name_ver").val();

        if (prof) {
            $('#ver_submit').attr('disabled', 'disabled');
            $("#loadingText_ver").show();

            $.ajax({
                type: "POST",
                url: "settings_verify1",
                data: $('#myVeriform').serialize(),
                dataType: "json",
                success: function(result) {
                    $('#ver_submit').removeAttr('disabled');
                    $("#loadingText_ver").hide();

                    var mystat = result.status.trim();
                    var mymsg = result.msg.trim();

                    if (mystat !== "") {
                        if (mystat === "success") {
                            swal({
                                title: "Success",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    window.open(
                                        'profile',
                                        '_self'
                                    );
                                }
                            });
                        } else if (mystat === "manualapi") {
                            swal({
                                title: "Pending",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    window.open(
                                        'profile',
                                        '_self'
                                    );
                                }
                            });
                        } else if (mystat === "nok") {
                            swal({
                                title: "Next of Kin",
                                text: '' + mymsg,
                                icon: "error",
                            }).then((value) => {
                                if (value) {
                                    window.open(
                                        'settings?type=nok',
                                        '_self'
                                    );
                                }
                            });
                        } else if (mystat === "error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else if (mystat === "smsverifyFirebase") {
                            swal({
                                title: "Phone Verification Required",
                                text: '' + mymsg,
                                icon: "info",
                            });
                            window.open(
                                'changephone?idverify=true',
                                '_self'
                            );
                        } else if (mystat === "smsverify") {
                            swal("" + mymsg, {
                                    content: "input",
                                    button: {
                                        text: "Submit",
                                        closeModal: false
                                    },
                                    closeOnClickOutside: false,
                                })
                                .then((name) => {
                                    if (!name) throw null;

                                    return fetch(`settings_password?term=${name}`);
                                })
                                .then(results => {
                                    return results.json();
                                })
                                .then(json => {
                                    const vcode = json.mycode;
                                    const mmy = json.mmy;

                                    if (!vcode) {
                                        return swal("The code you provided is incorrect, try again");
                                    }

                                    swal({
                                        title: "Success",
                                        text: mmy,
                                        icon: 'success',
                                    }).then((value) => {
                                        if (value) {
                                            window.open(
                                                'profile',
                                                '_self'
                                            );
                                        }
                                    });
                                })
                                .catch(err => {
                                    if (err) {
                                        swal("Oh noes!", "The code you provided is incorrect, try again!", "error");
                                    } else {
                                        swal.stopLoading();
                                        swal.close();
                                    }
                                });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
    $('.resendsms').click(function() {

        $("#sendingsms").html('Sending SMS...');
        $("#sendingsms").removeClass('hidden');

        var rep = $(this).attr("data-value");
        var relink = "resendsms";

        if (rep === "phonechange") {
            var relink = "resendphonesms";
            $('#sett_submit').removeAttr('disabled');
            $('#sett_submit').css("opacity", "6");
            $("#mytimer").hide();
            $(".resendsms").hide();
            $("#time").html('');
            $('#time').addClass('stop');
            $('#time').removeClass('start');
        }

        $.ajax({
            type: "POST",
            url: relink,
            data: {
                resent: true
            },
            dataType: "json",
            success: function(result) {
                var mystat = result.status.trim();
                var mymsg = result.msg.trim();
                $("#sendingsms").addClass('hidden');
                $('#time').addClass('stop');
                $('#time').removeClass('start');
                $('#mySettPhoneform').addClass('hidden');
                $('#mySettformPhone').removeClass('hidden');

                if (mystat !== "") {
                    if (mystat === "success") {

                        swal({
                                title: "Success",
                                text: '' + mymsg,
                                icon: "success",
                            })
                            .then((pro) => {
                                if (pro) {
                                    if (rep === "phonechange") {
                                        window.open(
                                            'settings?type=phone&resend=true',
                                            '_self'
                                        );
                                    }
                                }
                            });
                    } else if (mystat === "error") {
                        swal({
                            title: "Error",
                            text: '' + mymsg,
                            icon: "error",
                        });
                    } else {

                        swal({
                                title: "Unknown error",
                                text: 'Please try again',
                                icon: "error",
                            })
                            .then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });

                    }
                }
            }
        });
    });

    $('#settPhone_submit').click(function() {
        var prof = $("#answer1").val();

        if (prof) {

            $('#settPhone_submit').attr('disabled', 'disabled');
            $("#loadingText_sett").show();

            $.ajax({
                type: "POST",
                url: "verifysmsnow",
                data: $('#mySettformPhone').serialize(),
                dataType: "json",
                success: function(result) {
                    $('#settPhone_submit').removeAttr('disabled');
                    $("#loadingText_sett").hide();

                    var mystat = result.status.trim();
                    var mymsg = result.msg.trim();
                    //Your phone number has been successfully verified

                    if (mystat != "") {
                        if (mystat == "success") {
                            swal({
                                title: "Success",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    window.open(
                                        'index',
                                        '_self'
                                    );
                                }
                            });
                        } else if (mystat == "error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            swal({
                title: "Error",
                text: 'Please enter the code',
                icon: "error",
            });
        }
    });
});
