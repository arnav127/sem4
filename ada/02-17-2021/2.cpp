#include <bits/stdc++.h>
using namespace std;

int sumArray(int A[], int l, int r)
{
    if (l > r)
        return 0;
    else if (l == r)
        return A[l];
    int mid = (l + r) / 2;
    int lsum = sumArray(A, l, mid);
    int rsum = sumArray(A, mid + 1, r);
    return lsum + rsum;
}

int main()
{
    int n;
    cout << "Enter the number of elements:";
    cin >> n;
    int arr[n];
    cout << "Enter " << n << " elements: ";
    for (int i = 0; i < n; ++i)
        cin >> arr[i];
    cout << "\nThe sum is:" << sumArray(arr, 0, n - 1) << '\n';
    return 0;
}