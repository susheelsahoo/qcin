    $("#Membership_Type").on("change",function(){
        var dropValue = this.value;
		$("#year").hide();
		$("#category_2").hide();
		$("#category_3").hide();
		$("#category_4").hide();
		$("#category_5").hide();
		$("#category_6").hide();
		$("#category_7").hide();
		$("#category_8").hide();
		if(dropValue==0){
		 $("#category_0").show();
		}else if(dropValue==1){
			 $("#category_0").hide();
			alert('Please note that all the Individual category applications for new/renewal membership are on hold until further notice.');
			location.reload();
		}else if(dropValue==2){
			 $("#category_0").hide();
			$("#category_2").show();
			$("#year").show();
		}else if(dropValue==3){
			 $("#category_0").hide();
			$("#category_3").show();
		}else if(dropValue==4){
			 $("#category_0").hide();
			$("#category_4").show();
		}else if(dropValue==5){
			 $("#category_0").hide();
			$("#category_5").show();
		}else if(dropValue==6){
			 $("#category_0").hide();
			$("#category_6").show();
		}else if(dropValue==7){
			 $("#category_0").hide();
			$("#category_7").show();
		}else if(dropValue==8){
			 $("#category_0").hide();
			$("#category_8").show();
		}
    });