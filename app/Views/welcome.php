<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal with Alpine.js</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            width: 300px;
            display: none;
        }

        .modal.active {
            display: block;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }

        .modal-overlay.active {
            display: block;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .modal-footer {
            margin-top: 1rem;
            text-align: right;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div x-data="{ isModalOpen: false }">
        <!-- Trigger Button -->
        <button @click="isModalOpen = true">Open Modal</button>

        <!-- Modal Overlay -->
        <div class="modal-overlay" :class="{ 'active': isModalOpen }" @click="isModalOpen = false"></div>

        <!-- Modal -->
        <div class="modal" :class="{ 'active': isModalOpen }">
            <div class="modal-header">
                <h2>Modal Title</h2>
                <button @click="isModalOpen = false">&times;</button>
            </div>
            <div class="modal-body">
                <p>This is a simple modal dialog. You can put any content here.</p>
            </div>
            <div class="modal-footer">
                <button @click="isModalOpen = false">Close</button>
            </div>
        </div>
    </div>

</body>

</html>