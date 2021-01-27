#include <bits/stdc++.h>
using namespace std;

int binSearch(int arr[], int low, int high, int key)
{
    if (high < low)
        return -1;
    int mid = low + (high - low) / 2;
    
    if (arr[mid] == key)
        return mid;

    else if (arr[mid] > key)
        return binSearch(arr, low, mid - 1, key);
    
    return binSearch(arr, mid + 1, high, key);
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
    int found = binSearch(arr, 0, size - 1, key);
    if(found == -1)
        cout << "Element is not present in the array\n";
    else
        cout << "Key " << key << " found at index " << found << "\n";
    return 0;
}
