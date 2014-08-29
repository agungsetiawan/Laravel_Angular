<table>
	<thead>
		<tr>
			<th>Author</th>
			<th>Text</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="comment in comments">
			<td>{{ comment.author }}</td>
			<td>{{ comment.text }}</td>
			<td><a ng-click="edit(comment.id)">Edit</a> | <a ng-click="delete(comment.id)">Delete</a></td>
		</tr>
	</tbody>
</table>