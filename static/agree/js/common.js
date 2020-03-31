$(document).ready(function(e) {
			
			/*伪单选项*/
			$(".sex").find("input").click(function(){
				var index=$(".sex").find("input").index(this);
				$(".sex").find("input").removeClass("active").eq(index).addClass("active");
			});
			/*点击接受时可提交*/
			$("#tongyi").click(function(){
				if($("#tongyi")[0].checked==true){
					$("#tijiao")[0].disabled=false;
					$("#tijiao").css('cursor','pointer');
					$("#tijiao").addClass("but");
				}
			});
			/*点击不接受时不可提交*/
			$("#notongyi").click(function(){
				if($("#notongyi")[0].checked==true){
					$("#tijiao")[0].disabled=true;
					$("#tijiao").css('cursor','');
					$("#tijiao").removeClass("but");
					
				}
			});
			
});
		
