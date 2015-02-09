# yii2-pnotify-widget
===================
http://sciactive.github.io/pnotify

composer.json
-----
```json
"require": {
    "xj/yii2-pnotify-widget": "*"
},
```
    
example
---
//in View
```php
PnotifyAssets::register($this);
```

//JS
```javascript
new PNotify({
    title: "Over Here",
    text: "Check me out. I'm in a different stack.",
    addclass: "stack-custom",
    stack: {"dir1": "down", "dir2": "right", "push": "top"}
})
```

//in View
```php
PNotifyHelperAssets::register($this);
```

//JS
```javascript
XJPnotify.notice("notice message")
XJPnotify.info("info message")
XJPnotify.error("error message")
XJPnotify.success("success message")

XJPnotify.setIcon("glyphicon glyphicon-envelope")
XJPnotify.setIcon("ui-icon ui-icon-mail-closed")
```