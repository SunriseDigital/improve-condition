(function($){
	$.widget('my.slidGallery',{
		options: {
		//オプション設定
			speed : 'fast', //アニメーションのスピード
			g_width : 400
		},
		_create: function(){
		//実行内容
			//初期設定
			var self = this;
			var target = this.element;	
			var index = 1;//今の位置

			//先頭と最後尾にliを追加
			target.children('li:first').clone().insertAfter(target.children('li:last'));
			target.children('li:last').prev().clone().insertBefore(target.children('li:first'));
			
			//ul,liの設定
			var total = target.children().length;
			//ulの幅を取得と初期位置
			var slider_width = self.options.g_width* (total);
			start_position = -self.options.g_width +'px';
			target.css({
				width: slider_width,
				left: start_position
			});
			

			//サムネイル設定
			var thum_list = self.options.thum.children();
			if (thum_list.length == 0){
				for (var i = 1; i <= total; i++) {
					thum_list.append("<span></span>");
				};
			}
			var thum_n = 1;
			thum_list.each(function(){
				$(this).data('thum',thum_n++);
			});

			var loop = false;

			//nextをクリックすると移動
			if(self.options.next && elf.options.prev){
				self.options.next.click(function(){
					//最後まで行ったら最初へ
					if (index >= (total-2)){
						index = 1;
						self.setLastSlider(index, 0);
					}else{
					//通常処理
						index = index +1;
						self.setSlider(index);
					}
					//index = (index >= (total-2) ? 1 : index+1);
					//実行内容
				});
				//prevをクリックすると移動
				self.options.prev.click(function(){
					//最初まで行ったら最後へ
					if (index <= 1){
						index = total-2;
						self.setLastSlider(index, total-1);					
					}else{
						index = index -1;
						self.setSlider(index);
					}
					//index = (index <= 0 ? (total-1) : index-1);
				});
			}
				
			//サムネイルをクリックすると移動
			self.options.thum.click(function(){
				index = $(this).data('thum');
				self.setSlider(index);
			});
		},
		//アニメーションの関数
		setSlider: function(index) {
			var self = this;
			var target = this.element;
			var move = -self.options.g_width * index;
			target.stop(false,false).animate(
				{left: move + "px"},
				{
					duration : self.options.speed
				}
			);
			self.options.thum.removeClass('select');
			self.options.thum.eq(index-1).addClass('select');
		},
		setLastSlider: function(index,start){
			var self = this;
			var target = this.element;
			var move = -self.options.g_width * index;
			var start_move = -self.options.g_width * start;
			target.css('left',start_move +'px').stop(false,false).animate(
				{left: move + 'px'},
				{
					duration : self.options.speed
				}
			);
			self.options.thum.removeClass('select');
			self.options.thum.eq(index-1).addClass('select');
		},
		destroy: function() {
		//destroy
			self.options.thum.removeClass('select');
			$.Widget.prototype.destroy.call( this );
		}
	});
})(jQuery);