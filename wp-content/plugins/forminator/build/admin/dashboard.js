!function(t){formintorjs.define([],function(e){return new(Backbone.View.extend({el:".wpmudev-dashboard-section",events:{"click .wpmudev-action-close":"dismiss_welcome"},initialize:function(){var e=Forminator.Utils.get_url_param("notification"),o=Forminator.Utils.get_url_param("title"),n=Forminator.Utils.get_url_param("createnew");if(setTimeout(function(){t(".forminator-scroll-to").length&&t("html, body").animate({scrollTop:t(".forminator-scroll-to").offset().top-50},"slow")},100),e){var r=_.template("<strong>{{ formName }}</strong> {{ Forminator.l10n.options.been_published }}");Forminator.Notification.open("success",r({formName:Forminator.Utils.sanitize_uri_string(o)}),4e3)}return n&&setTimeout(function(){jQuery(".forminator-create-"+n).click()},200),this.render()},dismiss_welcome:function(e){e.preventDefault();var o=t(e.target).closest(".sui-box"),n=t(e.target).data("nonce");o.slideToggle(300,function(){t.ajax({url:Forminator.Data.ajaxUrl,type:"POST",data:{action:"forminator_dismiss_welcome",_ajax_nonce:n},complete:function(t){o.remove()}})})},render:function(){t("#forminator-new-feature").length>0&&setTimeout(function(){SUI.openModal("forminator-new-feature","wpbody-content")},300)}}))})}(jQuery);