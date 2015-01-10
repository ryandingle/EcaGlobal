;(function(){
 var Action_Configuration = {
		sampleAct : function(){
			return this.delegate(global_vars.sample,'click',function(){
				//alert('lol');
			});
		}
	}
	
	$.extend(config.doc, Action_Configuration);
	config.doc.sampleAct();
}(jQuery,window,document));