var XJPnotify = {
    _alert: null,
    icon: null,
    consumeAlert: function () {
        if (this._alert)
            return;
        this._alert = window.alert;
        window.alert = function (message) {
            new PNotify({
                title: 'Alert',
                text: message
            });
        };
    },
    releaseAlert: function () {
        if (!this._alert)
            return;
        window.alert = this._alert;
        this._alert = null;
    },
    setIcon: function (icon) {
        this.icon = icon;
    },
    notice: function (text, title) {
        if (!title) {
            title = 'Notice';
        }
        var options = {
            title: title,
            text: text
        };
        if (this.icon !== null) {
            options.icon = this.icon;
        }
        new PNotify(options);
    },
    info: function (text, title) {
        if (!title) {
            title = 'Info';
        }
        var options = {
            type: 'info',
            title: title,
            text: text
        };
        if (this.icon !== null) {
            options.icon = this.icon;
        }
        new PNotify(options);
    },
    success: function (text, title) {
        if (!title) {
            title = 'Success';
        }
        var options = {
            type: 'success',
            title: title,
            text: text
        };
        if (this.icon !== null) {
            options.icon = this.icon;
        }
        new PNotify(options);
    },
    error: function (text, title) {
        if (!title) {
            title = 'Error';
        }
        var options = {
            type: 'error',
            title: title,
            text: text
        };
        if (this.icon !== null) {
            options.icon = this.icon;
        }
        new PNotify(options);
    }
};