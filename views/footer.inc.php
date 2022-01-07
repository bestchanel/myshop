<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    var _userData;

    function loginUser() {
        let _username = document.getElementById('username').value
        let _password = document.getElementById('password').value

        fetch('models/UserModel.php', {
                method: 'post',
                body: JSON.stringify({
                    action: 'login',
                    username: _username,
                    password: _password
                })
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                if (data.user_id) {
                    if (data.user_allow == 'ban') {
                        alert('บัญชีนี้ถูกระงับการใช้งานจากผู้ดูแลระบบ');
                    } else {
                        window.location.href = "?app=product";
                        // window.location.reload()
                    }
                } else {
                    alert("รหัสผ่านไม่ถูกต้อง!")
                }
            })
    }

    function registerUser() {
        let _username = document.getElementById('username').value
        let _password = document.getElementById('password').value
        let user_name = document.getElementById('user_name').value
        let user_phone = document.getElementById('user_phone').value
        let user_mail = document.getElementById('user_mail').value
        let user_address = document.getElementById('user_address').value

        if (_username && _password && user_name && user_phone && user_mail && user_address) {
            fetch('models/UserModel.php', {
                    method: 'post',
                    body: JSON.stringify({
                        action: 'register',
                        username: _username,
                        password: _password,
                        user_name: user_name,
                        user_phone: user_phone,
                        user_mail: user_mail,
                        user_address: user_address,
                    })
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data) {
                        window.location.href = "?app=login";
                    } else {
                        alert("ขออภัยเกิดข้อผิดพลาดระหว่างทำการ")
                    }
                    console.log(data);
                })
        } else {
            alert("กรุณากรอกข้อมูลให้ครบ!")
        }
    }

    function cancelThis() {
        if (confirm("คุณต้องการย้อนกลับจริงหรือไหม?")) {
            window.history.back();
        } else {
            console.log("cancel");
        }
    }

    function addToCart(product_id) {
        fetch('controllers/insertProductToCard.php', {
                method: 'post',
                body: JSON.stringify({
                    product_id: product_id
                })
            })
            .then((res) => res.json())
            .then((data) => {
                $(".top_menu_cart").html(data + '<i class="fas fa-shopping-cart"></i>');
            })

    }

    function loadItemToIconCart() {
        fetch('controllers/loadItemToIconCart.php')
            .then((res) => res.json())
            .then((data) => {
                $(".top_menu_cart").html(data + '<i class="fas fa-shopping-cart"></i>');
            })
    }


    function removeProduct(product_id) {
        if (confirm("คุณแน่ใจที่จะลบสินค้าชิ้นนี้ออกจากร้านค้าหรืออไม่?")) {
            fetch("controllers/deleteProductByID.php", {
                    method: 'post',
                    body: JSON.stringify({
                        product_id: product_id
                    })
                })
                .then((res) => res.json())
                .then((data) => {
                    $('#tr_' + data).remove();
                    // console.log(data);
                })
        }
    }

    function pageLoaded(isCancel = "success!") {
        $("#content").removeClass("blur-5");

        $("#loadingScreen").fadeOut(function() {
            $(this).hide();
        });

        console.log(isCancel);
    }

    $("#loading_title").html = "Loading";
    $("#loading_content").html = "กำลังโหลดข้อมูลหน้าเว็บไซต์ครับ/ค่ะ";

    // hide loading $("#content").addClass("blur-5");
    $("#loadingScreen").hide();
    $("#content").addClass("blur-5");

    // fade in loading animation
    setTimeout($('#loadingScreen').fadeIn(), 200);


    jQuery(window).load(function() {
        pageLoaded();
        setTimeout(function() {
            $("#loading_title").html = "แจ้งเตือน";
            $("#loading_content").html = "ไม่มีการตอบสนองจากเซิฟเวอร์";
        }, 60000);
    });


</script>

<!-- ================================= scroll to top ================================= -->
<script type="text/javascript">
    var scrolltotop = {
        setting: {
            startline: 100,
            scrollto: 0,
            scrollduration: 1e3,
            fadeduration: [500, 100]
        },
        controlHTML: '<img src="https://lh3.googleusercontent.com/pw/AM-JKLV2MF2WN_5B3td3va3nQNWhyjx3poIp_gMEW1h4DUK5eokCIBaWGKmfPDFAaprGsMOv_pa56Iff9W0vaZWp3WoxCWgYsCc3zCdzEoOOIlajT2Cttpvrkg-ddHTDtpLqGl8sRFlkHUCF2sQbC4gaZYU=s50-no" />',
        controlattrs: {
            offsetx: 5,
            offsety: 5
        },
        anchorkeyword: "#top",
        state: {
            isvisible: !1,
            shouldvisible: !1
        },
        scrollup: function() {
            this.cssfixedsupport || this.$control.css({
                opacity: 0
            });
            var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
            t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0, this.$body.animate({
                scrollTop: t
            }, this.setting.scrollduration)
        },
        keepfixed: function() {
            var t = jQuery(window),
                o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
                s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
            this.$control.css({
                left: o + "px",
                top: s + "px"
            })
        },
        togglecontrol: function() {
            var t = jQuery(window).scrollTop();
            this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
                opacity: 1
            }, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({
                opacity: 0
            }, this.setting.fadeduration[1]), this.state.isvisible = !1)
        },
        init: function() {
            jQuery(document).ready(function(t) {
                var o = scrolltotop,
                    s = document.all;
                o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html" : "body" : "html,body"), o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({
                    position: o.cssfixedsupport ? "fixed" : "absolute",
                    bottom: o.controlattrs.offsety,
                    right: o.controlattrs.offsetx,
                    opacity: 0,
                    cursor: "pointer"
                }).attr({
                    title: "Scroll to Top"
                }).click(function() {
                    return o.scrollup(), !1
                }).appendTo("body"), document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({
                    width: o.$control.width()
                }), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function() {
                    return o.scrollup(), !1
                }), t(window).bind("scroll resize", function(t) {
                    o.togglecontrol()
                })
            })
        }
    };
    scrolltotop.init();
</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>


<!-- ======================== Datatable ======================== -->
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>