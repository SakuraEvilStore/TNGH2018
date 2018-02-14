//var kbi_time_start=new Date; onmouseover=show_topjs(); onmouseout=hide_topjs();
window.onerror=function(){return true;}
try{
    document.execCommand("BackgroundImageCache",false,true)
}catch(e){};
var top_code = '<link rel="stylesheet"><div id="topNav"><div class="h-1"><a href="./">网站首页</a>|<a target="_blank" href="reg.php">注册帐号</a>|<a target="_blank" href="http://pan.baidu.com/s/1kTso9KV">下载游戏</a>|游戏充值|帐号管理</div></div>';
if(document.all&&!document.getElementById)document.getElementById=function(d){
    return document.all[d]
};
    
if(!String.repeat)String.prototype.repeat=function(d){
    return Array(d+1).join(this)
};
    
if(!String.trim)String.prototype.trim=function(){
    return this.replace(/^\s+|\s+$/g,"")
};
(function(){
    function d(a){
        if(a===false||!Array.prototype.push||!Object.hasOwnProperty||!document.createElement||!document.getElementsByTagName){
            alert("TR- if you see this message isCompatible is failing incorrectly.");
            return false
        }
        return true
    }
    function e(){
        for(var a=[],c=0;c<arguments.length;c++){
            var b=arguments[c];
            if(typeof b=="string")b=document.getElementById(b);
            if(arguments.length==1)return b;
            a.push(b)
        }
        return a
    }
    window.ADS||(window.ADS={});
    window.ADS.isCompatible=d;
    window.ADS.$=e;
    window.ADS.addEvent=
    function(a,c,b){
        if(!d())return false;
        if(!(a=e(a)))return false;
        if(a.addEventListener){
            a.addEventListener(c,b,false);
            return true
        }else if(a.attachEvent){
            a["e"+c+b]=b;
            a[c+b]=function(){
                a["e"+c+b](window.event)
            };
                
            a.attachEvent("on"+c,a[c+b]);
            return true
        }
        return false
    };
        
    window.ADS.addClassName=function(a,c){
        if(!(a=e(a)))return false;
        a.className+=(a.className?" ":"")+c;
        return true
    };
        
    window.ADS.removeClassName=function(a,c){
        if(!(a=e(a)))return false;
        for(var b=getClassNames(a),g=b.length,f=g-1;f>=0;f--)b[f]===
            c&&delete b[f];
        a.className=b.join(" ");
        return g==b.length?false:true
    }
})();

//旧版 头部弹出
var topNav={
    showDiv:function(){
        ADS.$("pop_warp").style.display="block"
    },
    hiddenDiv:function(){
        ADS.$("pop_warp").style.display="none"
    }
};

//判断火狐版本号
var Sys = {};
var ua = navigator.userAgent.toLowerCase();
var isFirefox = (navigator.userAgent.indexOf("Firefox")>0)?true:false;

if (isFirefox){//若为火狐浏览器
    Sys.firefox = ua.match(/firefox\/([\d.]+)/)[1];
}else{
    Sys.firefox = false;
}
   
if(Sys.firefox >= "12.0"){//对火狐新版本单独处理
    // LJY 
    ADS.addEvent(window,"load",function(){
        var a=ADS.$("pop_warp"),b=ADS.$("game");
        a.style.display="none";
        ADS.addEvent(b,"mouseenter",function(){
            topNav.showDiv()
        });
        ADS.addEvent(a,"mouseenter",function(){
            topNav.showDiv()
        });
        ADS.addEvent(b,"mouseleave",function(){
            topNav.hiddenDiv()
        });
        ADS.addEvent(a,"mouseleave",function(){
            topNav.hiddenDiv()
        })
    });
}else{
    ADS.addEvent(window,"load",function(){
        var a=ADS.$("pop_warp"),b=ADS.$("game");
        a.style.display="none";
        ADS.addEvent(b,"mousemove",function(){
            topNav.showDiv()
        });
        ADS.addEvent(a,"mousemove",function(){
            topNav.showDiv()
        });
        ADS.addEvent(b,"mouseout",function(){
            topNav.hiddenDiv()
        });
        ADS.addEvent(a,"mouseout",function(){
            topNav.hiddenDiv()
        })
    });

}