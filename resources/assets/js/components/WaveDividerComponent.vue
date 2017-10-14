<template>
	<div class="wave-divider"></div>
</template>

<script>
</script>

<style lang="scss" scoped="wave-divider">
	.wave-divider {
		height: 25px;
		background: {
			image: url('/img/wave.png');
			position: center;
			size: contain;
		}

		&:hover {
			animation: moveWave 10s linear infinite;
		}

		@keyframes moveWave {
			from {
				background-position: -100%;
			}

			to {
				background-position: 0%;
			}
		}
	}
</style>
