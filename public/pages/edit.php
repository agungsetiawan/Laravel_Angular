<form ng-submit="update()">
	<input type="hidden" ng-model="commentData.id">
	<div class="input">
		<input type="text" name="author" ng-model="commentData.author">
	</div>

	<div class="input">
		<input type="text" name="text" ng-model="commentData.text">
	</div>

	<div class="input">
		<input type="submit" value="Submit"/>
	</div>
</form>