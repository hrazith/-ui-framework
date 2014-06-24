// JavaScript Document
$(function() {
	
	
$('.geninfo').columnize({ columns: 3 });
	
	// Toggle for FAID detail
	

	$("#acct-info").click(function(){
		$("#client-view").slideUp("slow");
		$("#faid-view").slideUp("slow");
		$("#acct-view").slideToggle("slow");
	});
	$("#client-info").click(function(){
		$("#acct-view").slideUp("slow");
		$("#faid-view").slideUp("slow");
		$("#client-view").slideToggle("slow");
			
	});
	$("#faid-info").click(function(){
		$("#client-view").slideUp("slow");
		$("#acct-view").slideUp("slow");
		$("#faid-view").slideToggle("slow");
			
	});    
	
	$("#acct-view .close").click(function(){
		$("#acct-view").slideToggle("slow");
		
	});
	$("#client-view .close").click(function(){
		$("#client-view").slideToggle("slow");
		
	});
	$("#faid-view .close").click(function(){
		$("#faid-view").slideToggle("slow");
		
	});  
	$("#sec-view .close").click(function(){
		$("#sec-view").slideUp("slow");
		$("#sec-info").closest('tr').animate({"height" : 27}, 600);
		
	}); 
	
	
	//
	$("#sec-info").click(function() {
 var thisRow = $(this).closest('tr'); //parent row of the input or whatever is the click trigger
 var conDiv = $(this).data("href"); //returns #content1 - id of the content div you want shown
 var conH = $(conDiv).height(); //corresponding content div height
 var rowH = $(thisRow).height(); // this row height
 var newrowH = conH + rowH +5; //the new row height
 var posL = $(thisRow).position().left; // left position that div needs to be
 var posT = $(thisRow).position().top + rowH + 3 + 'px';  // top position that div needs to be ** not working properly!!
 

   if ( $(conDiv).is(":visible") ) {
       //$(thisRow).css({"height" : "auto"});
      // $(conDiv).css({"display" : "none", "left": "auto", "top" : "auto" });
	   $(thisRow).animate({"height" : 27}, 600);
	   $(conDiv).slideUp("slow");
   } else  {
       //reset all rows to normal height
       $("tr").css({"height" : "auto"}); 
       //expand the height of this row
       $(thisRow).animate({"height" : newrowH}, 600);
       
       // reset all content divs.. hide them             
     	 $("[id*=view]").css({"display" : "none", "left": "auto", "top" : "auto"}); 
	  
       //show the one you want
	   //$(conDiv).css({"display" : "block", "left": posL, "top" : posT});
	   $(conDiv).css({"left": posL, "top" : posT});
	   $(conDiv).slideDown("slow");
	 
   }
}); 
	
	
		 

});