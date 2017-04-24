
(function($){
    $(function(){
        $(document).ready(function(){
            var _textLoading = "Please wait";
            // Ajax Form Handler
            $(document).on("submit", "form[data-ajax]", function(){
                var form = $(this);

                var tips;
                var tipsText;
                if(form.data("tips") != undefined ){
                    //data-tips="#tips"
                    tips = $(form.data("tips"));
                }
                else
                    tips= form.find(".tips");

                if(form.data("enable-tips-text")){
                    tipsText = form.find(".tips-text");
                }
                else{
                    tips.html("");
                }

                tips.removeClass("success").removeClass("error").removeClass("warning");

                if(form.data("enable-tips-text")){
                    tips.addClass("warning");
                    tipsText.html(_textLoading);
                }
                else{
                    tips.addClass("warning").html(_textLoading);
                }

                $(window).resize();

                if(form.data('no-scroll') != true){
                    $("html,body").animate({
                        scrollTop : tips.offset().top - $('nav.top-bar').outerHeight()
                    }, 500);
                }

                var data = new FormData();
                form.find('[type=file]').each(function(){
                    data.append($(this).attr("name"), this.files[0]);
                });

                $.each(form.serializeArray(), function(key, value){
                    data.append(value.name, value.value);
                });

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        /*
                         * response {
                         *   errors : string (error message if error)
                         *   redirectUrl : string (url to redirect if success)
                         *   modal : load other reveal modal with specified id (redirectUrl is required)
                         *   message : string (success message)
                         * }
                         */
                        var data = JSON.parse(response);

                        var inputCaptcha = $("[data-input-captcha]");
                        var refreshCaptcha = $("[data-refresh-captcha]");
                        if( inputCaptcha.length > 0 ) inputCaptcha.val( "" );
                        if( refreshCaptcha.length > 0 ) refreshCaptcha.click();

                        if(form.data("enable-tips-text")){
                            tips.removeClass("success").removeClass("error").removeClass("warning");
                            tipsText.html("");
                        }
                        else{
                            tips.removeClass("success").removeClass("error").removeClass("warning").html("");
                        }

                        if(form.data("onsuccess") != undefined ){
                            var fn = window[form.data("onsuccess")];
                            if(typeof fn === 'function') {
                                fn(data);
                            }
                        }

                        if(typeof(data.errors) != "undefined" &&  data.errors.length != 0){
                            if(form.data("enable-tips-text")){
                                tips.addClass("error");
                                tipsText.html(data.errors);
                            }
                            else{
                                tips.addClass("error").html(data.errors);
                            }
                        }
                        else if(typeof(data.modal) != "undefined" && data.modal.length != 0){
                            $("#" + data.modal).foundation('reveal', 'open', data.redirectUrl);
                        }
                        else if(typeof(data.redirectUrl) != "undefined" && data.redirectUrl.length != 0){
                            window.location.href = data.redirectUrl;
                        }
                        else if(typeof(data.message) != "undefined" && data.message.length != 0){
                            if(form.data("enable-tips-text")){
                                tips.addClass("success");
                                tipsText.html(data.message);
                            }
                            else{
                                tips.addClass("success").html(data.message);
                            }
                            form[0].reset();
                        }
                        else if(typeof(data.noReset) != "undefined" && data.noReset.length != 0){
                            if(form.data("enable-tips-text")){
                                tips.addClass("success");
                                tipsText.html(data.noReset);
                            }
                            else{
                                tips.addClass("success").html(data.noReset);
                            }
                        }

                        $(window).resize();
                    }
                });

                return false;
            });
        });
    });
})(jQuery);