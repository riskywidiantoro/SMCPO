AUI.add("aui-editor-creole-parser",function(a){var c=a.config.doc;if(!b){var b={};}if(!b.Simple){b.Simple={};}b.Simple.Base=function(d,e){if(!arguments.length){return;}this.grammar=d;this.grammar.root=new this.ruleConstructor(this.grammar.root);this.options=e;};b.Simple.Base.prototype={ruleConstructor:null,grammar:null,options:null,parse:function(e,f,d){if(d){for(i in this.options){if(typeof d[i]=="undefined"){d[i]=this.options[i];}}}else{d=this.options;}f=f.replace(/\r\n?/g,"\n");this.grammar.root.apply(e,f,d);if(d&&d.forIE){e.innerHTML=e.innerHTML.replace(/\r?\n/g,"\r\n");}}};b.Simple.Base.prototype.constructor=b.Simple.Base;b.Simple.Base.Rule=function(e){if(!arguments.length){return;}for(var d in e){this[d]=e[d];}if(!this.children){this.children=[];}};b.Simple.Base.prototype.ruleConstructor=b.Simple.Base.Rule;b.Simple.Base.Rule.prototype={regex:null,capture:null,replaceRegex:null,replaceString:null,tag:null,attrs:null,children:null,match:function(e,d){return e.match(this.regex);},build:function(g,f,d){var h;if(this.capture!==null){h=f[this.capture];}var j;if(this.tag){j=c.createElement(this.tag);g.appendChild(j);}else{j=g;}if(h){if(this.replaceRegex){h=h.replace(this.replaceRegex,this.replaceString);}this.apply(j,h,d);}if(this.attrs){for(var e in this.attrs){j.setAttribute(e,this.attrs[e]);if(d&&d.forIE&&e=="class"){j.className=this.attrs[e];}}}return this;},apply:function(d,f,n){var j=""+f;var h=[];if(!this.fallback.apply){this.fallback=new this.constructor(this.fallback);}while(true){var e=false;var m=false;for(var g=0;g<this.children.length;g++){if(typeof h[g]=="undefined"){if(!this.children[g].match){this.children[g]=new this.constructor(this.children[g]);}h[g]=this.children[g].match(j,n);}if(h[g]&&(!e||e.index>h[g].index)){e=h[g];m=this.children[g];if(e.index==0){break;}}}var l=e?e.index:j.length;if(l>0){this.fallback.apply(d,j.substring(0,l),n);}if(!e){break;}if(!m.build){m=new this.constructor(m);}m.build(d,e,n);var k=e.index+e[0].length;j=j.substring(k);for(var g=0;g<this.children.length;g++){if(h[g]){if(h[g].index>=k){h[g].index-=k;}else{h[g]=void 0;}}}}return this;},fallback:{apply:function(e,f,d){if(d&&d.forIE){f=f.replace(/\n/g," \r");}e.appendChild(c.createTextNode(f));}}};b.Simple.Base.Rule.prototype.constructor=b.Simple.Base.Rule;b.Simple.Creole=function(d){var j={};j.link="[^\\]|~\\n]*(?:(?:\\](?!\\])|~.)[^\\]|~\\n]*)*";j.linkText="[^\\]~\\n]*(?:(?:\\](?!\\])|~.)[^\\]~\\n]*)*";j.uriPrefix="\\b(?:(?:https?|ftp)://|mailto:)";j.uri=j.uriPrefix+j.link;j.rawUri=j.uriPrefix+"\\S*[^\\s!\"',.:;?]";j.interwikiPrefix="[\\w.]+:";j.interwikiLink=j.interwikiPrefix+j.link;j.img="\\{\\{((?!\\{)[^|}\\n]*(?:}(?!})[^|}\\n]*)*)"+(d&&d.strict?"":"(?:")+"\\|([^}~\\n]*((}(?!})|~.)[^}~\\n]*)*)"+(d&&d.strict?"":")?")+"}}";var h=function(g,k){if(k instanceof Function){return k(g);}k=k instanceof Array?k:[k];if(typeof k[1]=="undefined"){k[1]="";}return k[0]+g+k[1];};var f={hr:{tag:"hr",regex:/(^|\n)\s*----\s*(\n|$)/},br:{tag:"br",regex:/\\\\/},preBlock:{tag:"pre",capture:2,regex:/(^|\n)\{\{\{\n((.*\n)*?)\}\}\}(\n|$)/,replaceRegex:/^ ([ \t]*\}\}\})/gm,replaceString:"$1"},tt:{tag:"tt",regex:/\{\{\{(.*?\}\}\}+)/,capture:1,replaceRegex:/\}\}\}$/,replaceString:""},ulist:{tag:"ul",capture:0,regex:/(^|\n)([ \t]*\*[^*#].*(\n|$)([ \t]*[^\s*#].*(\n|$))*([ \t]*[*#]{2}.*(\n|$))*)+/},olist:{tag:"ol",capture:0,regex:/(^|\n)([ \t]*#[^*#].*(\n|$)([ \t]*[^\s*#].*(\n|$))*([ \t]*[*#]{2}.*(\n|$))*)+/},li:{tag:"li",capture:0,regex:/[ \t]*([*#]).+(\n[ \t]*[^*#\s].*)*(\n[ \t]*\1[*#].+)*/,replaceRegex:/(^|\n)[ \t]*[*#]/g,replaceString:"$1"},table:{tag:"table",capture:0,regex:/(^|\n)(\|.*?[ \t]*(\n|$))+/},tr:{tag:"tr",capture:2,regex:/(^|\n)(\|.*?)\|?[ \t]*(\n|$)/},th:{tag:"th",regex:/\|+=([^|]*)/,capture:1},td:{tag:"td",capture:1,regex:"\\|+([^|~\\[{]*((~(.|(?=\\n)|$)|"+"\\[\\["+j.link+"(\\|"+j.linkText+")?\\]\\]"+(d&&d.strict?"":"|"+j.img)+"|[\\[{])[^|~]*)*)"},singleLine:{regex:/.+/,capture:0},paragraph:{tag:"p",capture:0,regex:/(^|\n)([ \t]*\S.*(\n|$))+/},text:{capture:0,regex:/(^|\n)([ \t]*[^\s].*(\n|$))+/},strong:{tag:"strong",capture:1,regex:/\*\*([^*~]*((\*(?!\*)|~(.|(?=\n)|$))[^*~]*)*)(\*\*|\n|$)/},em:{tag:"em",capture:1,regex:"\\/\\/(((?!"+j.uriPrefix+")[^\\/~])*"+"(("+j.rawUri+"|\\/(?!\\/)|~(.|(?=\\n)|$))"+"((?!"+j.uriPrefix+")[^\\/~])*)*)(\\/\\/|\\n|$)"},img:{regex:j.img,build:function(m,l,k){var g=c.createElement("img");g.src=l[1];g.alt=l[2]===undefined?(k&&k.defaultImageText?k.defaultImageText:""):l[2].replace(/~(.)/g,"$1");m.appendChild(g);}},namedUri:{regex:"\\[\\[("+j.uri+")\\|("+j.linkText+")\\]\\]",build:function(m,l,g){var k=c.createElement("a");k.href=l[1];if(g&&g.isPlainUri){k.appendChild(c.createTextNode(l[2]));}else{this.apply(k,l[2],g);}m.appendChild(k);}},namedLink:{regex:"\\[\\[("+j.link+")\\|("+j.linkText+")\\]\\]",build:function(m,l,g){var k=c.createElement("a");k.href=g&&g.linkFormat?h(l[1].replace(/~(.)/g,"$1"),g.linkFormat):l[1].replace(/~(.)/g,"$1");this.apply(k,l[2],g);m.appendChild(k);}},unnamedUri:{regex:"\\[\\[("+j.uri+")\\]\\]",build:"dummy"},unnamedLink:{regex:"\\[\\[("+j.link+")\\]\\]",build:"dummy"},unnamedInterwikiLink:{regex:"\\[\\[("+j.interwikiLink+")\\]\\]",build:"dummy"},rawUri:{regex:"("+j.rawUri+")",build:"dummy"},escapedSequence:{regex:"~("+j.rawUri+"|.)",capture:1,tag:"span",attrs:{"class":"escaped"}},escapedSymbol:{regex:/~(.)/,capture:1,tag:"span",attrs:{"class":"escaped"}}};f.unnamedUri.build=f.rawUri.build=function(l,k,g){if(!g){g={};}g.isPlainUri=true;f.namedUri.build.call(this,l,Array(k[0],k[1],k[1]),g);};f.unnamedLink.build=function(l,k,g){f.namedLink.build.call(this,l,Array(k[0],k[1],k[1]),g);};f.namedInterwikiLink={regex:"\\[\\[("+j.interwikiLink+")\\|("+j.linkText+")\\]\\]",build:function(o,n,k){var l=c.createElement("a");var g,p;if(k&&k.interwiki){g=n[1].match(/(.*?):(.*)/);p=k.interwiki[g[1]];}if(typeof p=="undefined"){if(!f.namedLink.apply){f.namedLink=new this.constructor(f.namedLink);}return f.namedLink.build.call(f.namedLink,o,n,k);}l.href=h(g[2].replace(/~(.)/g,"$1"),p);
this.apply(l,n[2],k);o.appendChild(l);}};f.unnamedInterwikiLink.build=function(l,k,g){f.namedInterwikiLink.build.call(this,l,Array(k[0],k[1],k[1]),g);};f.namedUri.children=f.unnamedUri.children=f.rawUri.children=f.namedLink.children=f.unnamedLink.children=f.namedInterwikiLink.children=f.unnamedInterwikiLink.children=[f.escapedSymbol,f.img];for(var e=1;e<=6;e++){f["h"+e]={tag:"h"+e,capture:2,regex:"(^|\\n)[ \\t]*={"+e+"}[ \\t]"+"([^~]*?(~(.|(?=\\n)|$))*)[ \\t]*=*\\s*(\\n|$)"};}f.ulist.children=f.olist.children=[f.li];f.li.children=[f.ulist,f.olist];f.li.fallback=f.text;f.table.children=[f.tr];f.tr.children=[f.th,f.td];f.td.children=[f.singleLine];f.th.children=[f.singleLine];f.h1.children=f.h2.children=f.h3.children=f.h4.children=f.h5.children=f.h6.children=f.singleLine.children=f.paragraph.children=f.text.children=f.strong.children=f.em.children=[f.escapedSequence,f.strong,f.em,f.br,f.rawUri,f.namedUri,f.namedInterwikiLink,f.namedLink,f.unnamedUri,f.unnamedInterwikiLink,f.unnamedLink,f.tt,f.img];f.root={children:[f.h1,f.h2,f.h3,f.h4,f.h5,f.h6,f.hr,f.ulist,f.olist,f.preBlock,f.table],fallback:{children:[f.paragraph]}};b.Simple.Base.call(this,f,d);};b.Simple.Creole.prototype=new b.Simple.Base();b.Simple.Creole.prototype.constructor=b.Simple.Creole;a.CreoleParser=b.Simple.Creole;},"@VERSION@",{requires:["aui-base"]});