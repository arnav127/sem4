#include <bits/stdc++.h>

using namespace std;

void minmax(int arr[], int low, int high, int &mn, int &mx)
{
    if (low == high)
    {
        if (mx < arr[low])
            mx = arr[low];
        if (mn > arr[high])
            mn = arr[high];
        return;
    }
    if (high - low == 1)
    {
        if (arr[low] < arr[high])
        {
            if (mn > arr[low])
                mn = arr[low];
            if (mx < arr[high])
                mx = arr[high];
        }
        else
        {
            if (mn > arr[high])
                mn = arr[high];
            if (mx < arr[low])
                mx = arr[low];
        }
        return;
    }
    int mid = (low + high) / 2;
    minmax(arr, low, mid, mn, mx);
    minmax(arr, mid + 1, high, mn, mx);
}

int main()
{
    int n, mn = INT_MAX, mx = INT_MIN;
    cout << "Enter number of elements: ";
    cin >> n;
    int arr[n];
    cout << "Enter " << n << " elements: ";
    for (int i = 0; i < n; i++)
        cin >> arr[i];
    minmax(arr, 0, n - 1, mn, mx);
    cout << "Maximum element: " << mx << '\n';
    cout << "Minimum element: " << mn << '\n';
    return 0;
}