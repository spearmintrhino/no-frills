// Check instance
if (typeof namespace == "undefined" || !namespace) {
    var namespace = {};
}
if (typeof namespace.ProjectName == "undefined" || !namespace.ProjectName) {
    namespace.ProjectName = {};
}
namespace.ProjectName.Global = function() {
    this.init();
};

// ------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------

// Prototype
namespace.ProjectName.Global.prototype = {

    init: function() {
        jQuery(document).ready(jQuery.proxy(this, 'onDocumentReady'));
        jQuery(window).load(jQuery.proxy(this, 'onWindowLoad'));
        jQuery(window).resize(jQuery.proxy(this, 'onWindowResize'));
    },

    // --------------------------------------------------------------------------------------------

    onDocumentReady: function() {

    },

    // --------------------------------------------------------------------------------------------

    onWindowLoad: function() {

    },

    // --------------------------------------------------------------------------------------------

    onWindowResize: function() {

    }


};

// ------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------

// Run instance
new namespace.ProjectName.Global();


