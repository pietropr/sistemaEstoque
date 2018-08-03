(function () {
var code = (function () {
  'use strict';

  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

  var global$1 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

  var getMinWidth = function (editor) {
    return editor.getParam('code_dialog_width', 600);
  };
  var getMinHeight = function (editor) {
    return editor.getParam('code_dialog_height', Math.min(global$1.DOM.getViewPort().h - 200, 500));
  };
  var $_9t930ea2jkbnb3mz = {
    getMinWidth: getMinWidth,
    getMinHeight: getMinHeight
  };

  var setContent = function (editor, html) {
    editor.focus();
    editor.undoManager.transact(function () {
      editor.setContent(html);
    });
    editor.selection.setCursorLocation();
    editor.nodeChanged();
  };
  var getContent = function (editor) {
    return editor.getContent({ source_view: true });
  };
  var $_ebatlia4jkbnb3n3 = {
    setContent: setContent,
    getContent: getContent
  };

  var open = function (editor) {
    var minWidth = $_9t930ea2jkbnb3mz.getMinWidth(editor);
    var minHeight = $_9t930ea2jkbnb3mz.getMinHeight(editor);
    var win = editor.windowManager.open({
      title: 'Source code',
      body: {
        type: 'textbox',
        name: 'code',
        multiline: true,
        minWidth: minWidth,
        minHeight: minHeight,
        spellcheck: false,
        style: 'direction: ltr; text-align: left'
      },
      onSubmit: function (e) {
        $_ebatlia4jkbnb3n3.setContent(editor, e.data.code);
      }
    });
    win.find('#code').value($_ebatlia4jkbnb3n3.getContent(editor));
  };
  var $_fhj6ura1jkbnb3mx = { open: open };

  var register = function (editor) {
    editor.addCommand('mceCodeEditor', function () {
      $_fhj6ura1jkbnb3mx.open(editor);
    });
  };
  var $_3yojyaa0jkbnb3ms = { register: register };

  var register$1 = function (editor) {
    editor.addButton('code', {
      icon: 'code',
      tooltip: 'Source code',
      onclick: function () {
        $_fhj6ura1jkbnb3mx.open(editor);
      }
    });
    editor.addMenuItem('code', {
      icon: 'code',
      text: 'Source code',
      onclick: function () {
        $_fhj6ura1jkbnb3mx.open(editor);
      }
    });
  };
  var $_f4vt17a5jkbnb3n5 = { register: register$1 };

  global.add('code', function (editor) {
    $_3yojyaa0jkbnb3ms.register(editor);
    $_f4vt17a5jkbnb3n5.register(editor);
    return {};
  });
  function Plugin () {
  }

  return Plugin;

}());
})();
