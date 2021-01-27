#include <bits/stdc++.h>
using namespace std;

int search(int arr[], int size, int key)
{
    int i;
    for (i = 0; i < size; i++)
        if (arr[i] == key)
            return i;
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
    int index = search(arr, size, key);
    if(index == -1)
        cout << "Element is not present in the array\n";
    else
        cout << "Key " << key << " found at index " << index << "\n";
    return 0;
}