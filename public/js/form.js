
jQuery(document).ready(function($) {
"use strict";

    //Contact
    $('form.FormForm').submit(function(){

        var f = $(this).find('.form-group'),
        ferror = false,
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        f.children('select').each(function(){ // run all select
            var i = $(this); // current input
            var rule = i.attr('data-rule');
            if( rule !== undefined ){
              var ierror=false; // error flag for current input
              var pos = rule.indexOf( ':', 0 );
              if( pos >= 0 ){
                  var exp = rule.substr( pos+1, rule.length );
                  rule = rule.substr(0, pos);
              }else{
                  rule = rule.substr( pos+1, rule.length );
              }

              switch( rule ){
                  case 'required':
                  if( i.val()==='' ){ ferror=ierror=true; }
                  break;
              }
                i.next('.validation').html( ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' ) ).show('blind');
            }

        });
        f.children('input').each(function(){ // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if( rule !== undefined ){
            var ierror=false; // error flag for current input
            var pos = rule.indexOf( ':', 0 );
            if( pos >= 0 ){
                var exp = rule.substr( pos+1, rule.length );
                rule = rule.substr(0, pos);
            }else{
                rule = rule.substr( pos+1, rule.length );
            }

            switch( rule ){
                case 'required':
                if( i.val()==='' ){ ferror=ierror=true; }
                break;

                case 'minlen':
                if( i.val().length<parseInt(exp) ){ ferror=ierror=true; }
                break;

                case 'email':
                if( !emailExp.test(i.val()) ){ ferror=ierror=true; }
                break;

                case 'checked':
                if( !i.attr('checked') ){ ferror=ierror=true; }
                break;

                case 'regexp':
                exp = new RegExp(exp);
                if( !exp.test(i.val()) ){ ferror=ierror=true; }
                break;
            }
                i.next('.validation').html( ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' ) ).show('blind');
            }
        });
        f.children('textarea').each(function(){ // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if( rule !== undefined ){
            var ierror=false; // error flag for current input
            var pos = rule.indexOf( ':', 0 );
            if( pos >= 0 ){
                var exp = rule.substr( pos+1, rule.length );
                rule = rule.substr(0, pos);
            }else{
                rule = rule.substr( pos+1, rule.length );
            }

            switch( rule ){
                case 'required':
                if( i.val()==='' ){ ferror=ierror=true; }
                break;

                case 'minlen':
                if( i.val().length<parseInt(exp) ){ ferror=ierror=true; }
                break;
            }
                i.next('.validation').html( ( ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '' ) ).show('blind');
            }
        });
        if( ferror ) return false;
        else var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "/sendForm",
                data: str,
                success: function(msg){
                   // alert(msg);
                    if(msg == 'OK') {
                        $("#sendmessage2").addClass("show");
                        $("#errormessage2").removeClass("show");
                    }
                    else {
                        $("#sendmessage2").removeClass("show");
                        $("#errormessage2").addClass("show");
                        $('#errormessage2').html(msg);
                    }

                }
            });
        return false;
    });

});
