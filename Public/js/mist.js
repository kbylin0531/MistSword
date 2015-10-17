/**
 * Created by Lin on 2015/10/17 0017.
 */

/**
 * console不支持的浏览器的兼容处理
 * @type {Console}
 */
window.console = window.console || (function(){
    var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile
        = c.clear = c.exception = c.trace = c.assert = function(){};
    return c;
})();

var GenKits = {
    /**
     * 获取浏览器信息
     * 测试代码：console.log(GenKits.getBrowser());
     * @returns {{}}
     */
    'getBrowser': function () {
        var NV = {};
        var UA = navigator.userAgent.toLowerCase();
        //确定 浏览器名称
        try
        {
            NV.name=!-[1,]?'ie':
                (UA.indexOf("firefox")>0)?'firefox':
                    (UA.indexOf("chrome")>0)?'chrome':
                        window.opera?'opera':
                            window.openDatabase?'safari':
                                NV.name;
        }catch(e){}
        //确定浏览器版本
        try
        {
            NV.version=(NV.name=='ie')?UA.match(/msie ([\d.]+)/)[1]:
                (NV.name=='firefox')?UA.match(/firefox\/([\d.]+)/)[1]:
                    (NV.name=='chrome')?UA.match(/chrome\/([\d.]+)/)[1]:
                        (NV.name=='opera')?UA.match(/opera.([\d.]+)/)[1]:
                            (NV.name=='safari')?UA.match(/version\/([\d.]+)/)[1]:
                                NV.version;
        }catch(e){}
        //浏览器外壳
        try
        {
            NV.shell=(UA.indexOf('360ee')>-1)?'360极速浏览器':
                (UA.indexOf('360se')>-1)?'360安全浏览器':
                    (UA.indexOf('se')>-1)?'搜狗浏览器':
                        (UA.indexOf('aoyou')>-1)?'遨游浏览器':
                            (UA.indexOf('theworld')>-1)?'世界之窗浏览器':
                                (UA.indexOf('worldchrome')>-1)?'世界之窗极速浏览器':
                                    (UA.indexOf('greenbrowser')>-1)?'绿色浏览器':
                                        (UA.indexOf('qqbrowser')>-1)?'QQ浏览器':
                                            (UA.indexOf('baidu')>-1)?'百度浏览器':
                                                NV.shell;
        }catch(e){}
        return NV;
    }
};


var MistKits = {
    /**
     * 通过元素ID获取后台分配的信息
     * @param id
     * @returns {*|{edit}|jQuery}
     */
    'getMessage': function (id) {
        return $("#"+id).html();
    }
};