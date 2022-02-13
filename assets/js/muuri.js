const gridArea = document.querySelector('#majimeZineArchive');
document.addEventListener('DOMContentLoaded', function () {
	//＝＝＝Muuriギャラリープラグイン設定
	var grid = new Muuri(gridArea, {

	//アイテムの表示速度※オプション。入れなくても動作します
	showDuration: 600,
	showEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
	hideDuration: 600,
	hideEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',

	// アイテムの表示/非表示状態のスタイル※オプション。入れなくても動作します
	visibleStyles: {
		opacity: '1',
		transform: 'scale(1)'
	},
	hiddenStyles: {
		opacity: '0',
		transform: 'scale(0.5)'
	}
	});

	const filterLists = document.querySelectorAll('.p-tags-item');
	filterLists.forEach(function(target){
		target.addEventListener('click', function() {
			document.querySelector('.p-tags .active').classList.remove('active');
			const className = "."+this.id;
			console.log(this.id);
			document.querySelector(className).classList.add('active');
			if(this.id == 'all'){ 
				grid.filter('.c-section-gridMuuri__item');
			}else{
				grid.filter(className);
			}
		})
	});
});