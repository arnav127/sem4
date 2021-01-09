#include <bits/stdc++.h>
using namespace std;

void bubble(int arr[], int n)
{
    int i, j;
    for (i = 0; i < n - 1; i++)
        for (j = 0; j < n - i - 1; j++)
            if (arr[j] > arr[j + 1])
            {
                int temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
}

int main()
{
    int n;
    cout << "Enter the size of array: ";
    cin >> n;
    int arr[n];
    cout << "Enter array elements: ";
    for (int i = 0; i < n; i++)
        cin >> arr[i];

    bubble(arr, n);

    cout << "The sorted array is: ";
    for (int i = 0; i < n; i++)
        cout << arr[i] << " ";

    cout << "\n";
}