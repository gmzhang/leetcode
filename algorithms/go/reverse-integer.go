import "math"

func reverseInteger(num int) int {
	sign := 1
	ans := 0
	if num < 0 {
		sign = -1
		num *= -1
	}

	for num > 0 {

		tmp := num % 10

		ans = ans*10 + tmp

		num /= 10
	}

	ans = ans * sign

	if ans > math.MaxInt32 || ans < math.MinInt32 {
		return 0
	}
	return ans
}
