/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var testEditor;
var full =  [
            "undo", "redo", "|", 
            "bold", "del", "italic", "quote", "ucwords", "|", 
            "h1", "h2", "h3", "h4", "h5", "h6", "|", 
            "list-ul", "list-ol", "hr", "|",
            "link",  "image", "code", "preformatted-text", "code-block", "table", "datetime", "html-entities", "pagebreak", "|",
            "goto-line", "watch", "preview", "fullscreen", "clear", "search", "|",
            "help",
        ];
var simple =   [
            "undo", "redo", "|", 
            "bold", "italic", "quote", "|", 
            "h1", "h2", "h3", "h4", "h5", "h6", "|", 
            "list-ul", "list-ol", "hr", "|",
            "link", "table", "datetime", "|",
            "watch", "preview","fullscreen", "|",
            "help",
        ];  
        
        
$(function () {
    testEditor = editormd("test-editormd", {                
        syncScrolling: true,
        path: "plugin/editor.md/lib/",
        height:"100%",        
//        watch : false, 
//        autoHeight : true,
        lineNumbers:false,
        toolbarIcons : function() {
            // Or return editormd.toolbarModes[name]; // full, simple, mini
            // Using "||" set icons align right.            
            return simple;
        },
        onfullscreen : function() {
            $(".header").hide();
            $(".feng-nav").hide();
            testEditor.config("toolbarIcons", full);
            testEditor.config("watch", true);

        },
        onfullscreenExit : function() {
            $(".header").show();
            $(".feng-nav").show();
            testEditor.config("toolbarIcons", simple);
            testEditor.config("watch", false);            
        },
        
        
    });


});
