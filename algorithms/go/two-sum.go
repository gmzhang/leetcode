func twoSum(nums []int, target int) []int {
	indexMap := make(map[int]int, len(nums))

	for key, value := range nums {
		another := target - value
		if _key, ok := indexMap[another]; ok {
			return []int{_key, key}
		}
		indexMap[value] = key
	}
	return nil
}