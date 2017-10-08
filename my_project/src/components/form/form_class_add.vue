<template>
	<div class="row" id="form_class_add">
		<div class="col-xs-12 col-sm-4">
			<div class="widget-box">
				<div class="widget-header">
					<h4>频道分类添加</h4> <span class="widget-toolbar"><a data-action="settings" href="#"><i class="icon-cog"></i></a> <a data-action="reload" href="#"><i class="icon-refresh"></i></a> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a></span></div>
				<div class="widget-body">
					<div class="widget-main">
						<hr>
						<div><label for="form-field-select-2">分类级别</label>
							<select multiple="multiple" id="form-field-select-2" class="form-control">
								<option value="0">顶级分类-0</option>
								<option v-for="li in lis" v-bind:value="li.class_id">&nbsp;{{li.class_name}}-{{li.class_id}}</option>
							</select>
						</div>
						<hr>
						<div><label for="form-field-select-3">频道名称</label> <br>
							<div title="" id="form_field_select_3_chosen" class="chosen-container chosen-container-single" style="width: 305px;">
								<div class="chosen-drop">
									<div class="chosen-search">
										<input type="text" v-model="class_name">
									</div>
									<br />
								</div>
								<br />
								<button type="button" v-on:click="class_live_add" class="btn btn-info"><i class="icon-ok bigger-110"></i>添加</button>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>

</template>

<script>
export default
{
    name:'form_class_add',
	data(){
	    return {
			lis:{},
            class_name:'1',

		}
	},
	created()
	{
		live_class(this)
	},
	methods:
	{
		class_live_add()
		{
		    var class_parent = $('#form-field-select-2').val()
			$.ajax({
				dataType:'jsonp',
				url:host+'?r=class/class_live_add',
				data:{class_name:this.class_name,class_parent:class_parent},
				success:function(e)
				{
				    common(e.error)
                    alert(e.msg)
				}

			})
		}
	}
}

//获取分类列表
function live_class(thi)
{
    $.ajax({
        url:host+'?r=index/live_class',
        dataType:'jsonp',
        success:function(e)
        {
            common(e.error);
            if(e.error=='200')
            {
                thi.lis = e.msg
            }else
            {
                alert(e.msg)
            }
            //console.dir(e)
        }
    })
}

</script>

<style>
</style>