void bubble(int arr[], int n)
{
    int i, j;
    bool is_swapped = false;
    for (i = 0; i < n - 1; i++)
    {
        is_swapped = false;
        for (j = 0; j < n - i - 1; j++)
            if (arr[j] > arr[j + 1])
            {
                is_swapped = true;
                int temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        if (is_swapped == false)
            break;
    }
}
