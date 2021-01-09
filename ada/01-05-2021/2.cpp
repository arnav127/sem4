#include <bits/stdc++.h>

using namespace std;

int search(int arr[], int n, int x)
{
    int i;
    for (i = 0; i < n; i++)
        if (arr[i] == x)
            return i;
    return -1;
}

int main()
{
    cout << "Enter size: ";
    int n, x;
    cin >> n;
    int arr[n];
    for (int i = 0; i < n; i++)
        cin >> arr[i];
        
    cout << "Enter key: ";
    cin >> x;

    int index = search(arr, n, x);
    if (index == -1)
        cout << "Element is not present in the array";
    else
        cout << "Element found at position " << index << '\n';
    return 0;
}