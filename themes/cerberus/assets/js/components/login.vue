<template>
	<div class="row">
		<div class="col-12 col-md-6 offset-md-3">
			<form class="card border">
				<div class="card-header">
					Sign in
				</div>
				<div class="card-body p-4">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<small><a href="#">Forgot your password</a></small>
					<div class="float-right">
						<button class="btn btn-primary">Sign in</button>
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
export default {

}
</script>

<style>
.border{
	border:solid 1px #eee;
}
</style>
