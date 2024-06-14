(function($){

    var dataTable;

    var select2Init = function(){
      $('select').select2({
        dropdownAutoWidth : true,
        allowClear: true,
        placeholder: "Filter data",
      });
    };
    
    var dataTableInit = function(){
      dataTable = $('table').dataTable({
        "order": [[0, 'desc']],
        "columnDefs" : [{
            "targets": 2,
            "type": 'string',
        },{
            "targets": 3,
            "type": 'string',
        }],
      });
    };
    
    var dtSearchInit = function(){
      
      $('#name').change(function(){
        dtSearchAction( $(this) , 2)
      });
      $('#email').change(function(){
        dtSearchAction( $(this) , 3);
      });      
    }; 
    
    dtSearchAction = function(selector,columnId){
        var fv = selector.val();
        if( (fv == '') || (fv == null) ){
          dataTable.api().column(columnId).search('', true, false).draw();
        } else {
          dataTable.api().column(columnId).search(fv, true, false).draw();
        }
    };
    
    
      $(document).ready(function(){
      select2Init();
      dataTableInit();
      dtSearchInit();
      });
  
  })(jQuery);

