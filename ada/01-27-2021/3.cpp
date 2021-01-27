#include <bits/stdc++.h>
using namespace std;

int fibonacciSearch(int arr[], int size, int key)
{
    int fibo1 = 0, fibo2 = 1, offset = -1;
    int fib_next = fibo1 + fibo2;

    while (fib_next < size)
    {
        fibo1 = fibo2;
        fibo2 = fib_next;
        fib_next = fibo1 + fibo2;
    }

    while (fib_next > 1)
    {
        int i = min(offset + fibo1, size - 1);

        if (arr[i] < key)
        {
            fib_next = fibo2;
            fibo2 = fibo1;
            fibo1 = fib_next - fibo2;
            offset = i;
        }

        else if (arr[i] > key)
        {
            fib_next = fibo1;
            fibo2 = fibo2 - fibo1;
            fibo1 = fib_next - fibo2;
        }
        else
            return i;
    }

    if (fibo2 && arr[offset + 1] == key)
        return offset + 1;

    return -1;
}

int main()
{
    int size;
    cout << "Enter size: ";
    cin >> size;

    int arr[size];
    for (int i = 0; i < size; i++)
    {
        cin >> arr[i];
    }

    int key;
    cout << "Enter key: ";
    cin >> key;
    int index = fibonacciSearch(arr, size, key);
    if(index == -1)
        cout << "Element is not present in the array\n";
    else
        cout << "Key " << key << " found at index " << index << "\n";
    return 0;
}