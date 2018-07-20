if (!!!Deadly299) {

    var Deadly299 = {};
}

Deadly299.grid = {
    STATUS_SUCCESS: 1,
    dropDownList: '[data-role=drop-down-list]',

    init: function () {
        $(document).on('click', Deadly299.grid.dropDownList, this.reloadContainer);

        Deadly299.grid.renderSlickGrid();
    },

    reloadContainer: function () {

        var self = this,
            currentUrl = new URL(window.location.href),
            baseUrl = $(self).data('url'),
            type = $(self).data('type'),
            selectValue = $(self).val();

        var searchParams = new URLSearchParams(currentUrl.search.substring(1));
        var getCategoryId = searchParams.get("table1");

        if (type === 'table1' && selectValue) {
            baseUrl = baseUrl + '?table1=' + selectValue;
        } else if (type === 'table2' && selectValue) {
            baseUrl = baseUrl + '?table1=' + getCategoryId + '&table2=' + selectValue;
        }
        if (!selectValue && type == 'table2') {
            baseUrl = baseUrl + '?table2=' + getCategoryId;
        }

        // $.pjax({url: baseUrl, container: '#grid-container'});
        window.location.href = baseUrl;

    },
    renderSlickGrid: function () {

        if (!$('table').is('.items')) {
            return true;
        }
        var grid;
        var columns = [
            {id: "field1", name: "Field1", field: "field1"},
            {id: "field2", name: "Field2", field: "field2"},
            {id: "field3", name: "Field3", field: "field3"},
        ];
        var options = {
            enableCellNavigation: true,
            enableColumnReorder: false
        };
        var data = $('.items').data('items');
        console.log(data);
        if ($('div').is('#myGrid')) {
            grid = new Slick.Grid("#myGrid", data, columns, options);
        }
    }
};

Deadly299.grid.init();